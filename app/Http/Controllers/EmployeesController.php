<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\EmploymentStatus;
use App\Models\FunctionalGroup;
use App\Models\BureauOffice;
use App\Models\Division;
use App\Models\Position;
use App\Models\JobLevel;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeesExport;
use App\Models\EmployeesSupervisor;


class EmployeesController extends Controller
{
    public function index(Request $request)
    {
        $query = Employee::query();

        if ($request->has('searchEmployee') && !empty($request->searchEmployee)) {
            $search = $request->searchEmployee;
            $query->where(function ($q) use ($search) {
                $q->where('employee_id', 'LIKE', "%{$search}%")
                  ->orWhere('firstname', 'LIKE', "%{$search}%")
                  ->orWhere('lastname', 'LIKE', "%{$search}%")
                  ->orWhereHas('position', function ($q) use ($search) {
                      $q->where('name', 'LIKE', "%{$search}%");
                  });
            });
        }

        $employees = $query->paginate(10); // Adjust pagination as needed

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $employmentStatus = EmploymentStatus::all();
        $functionalGroups = FunctionalGroup::all();
        $bureauOffices = BureauOffice::all();
        $divisions = Division::all();
        $positions = Position::all();
        $jobLevels = JobLevel::all();

        return view('employees.create', compact('employmentStatus', 'functionalGroups', 'bureauOffices', 'divisions', 'positions', 'jobLevels'));
    }

       public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }

    public function store(StoreEmployeeRequest $request)
    {
        $divisionId = $request->input('division_id');
        $employeeData = $request->all();
    
        if (empty($divisionId)) {
            unset($employeeData['division_id']);
        }
    
        // ✅ Create the Employee
        $employee = Employee::create($request->all());
    
        // ✅ Check if the employee should have a user account
        if ($this->userAccountIfExists($employee->id, get_class($employee))) {
            return redirect()->back()->with('error', 'Email already in use.');
        }
    
        if ($request->has('createUserAccount')) {
            $this->createNewUser($request, $employee);
        }
    
        // ✅ Ensure the supervisor relationship is stored
        if ($request->has('supervisor_id') && !empty($request->supervisor_id)) {
            EmployeesSupervisor::updateOrCreate(
                ['employee_id' => $employee->id],
                ['supervisor_id' => $request->supervisor_id]
            );
        }
    
        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }
    

    private function sendPasswordLink($email)
    {
        $status = Password::sendResetLink(['email' => $email]);

        if ($status == Password::RESET_LINK_SENT) {
            return response()->json(['status' => 'success', 'message' => __($status)]);
        } else {
            return response()->json(['status' => 'error', 'message' => __($status)]);
        }
    }

    public function sendBulkResetLinks(Request $request)
    {
        $employeeIds = $request->input('employee_ids', []);

        $users = User::whereIn('userable_id', $employeeIds)
            ->where('userable_type', Employee::class)
            ->get();

        foreach ($users as $user) {
            Password::sendResetLink(['email' => $user->email]);
        }

        return redirect()->route('employees.index')->with('success', 'Password reset links sent successfully.');
    }

    private function userAccountIfExists($employeeId, $employeeType)
    {
        return User::where('userable_id', $employeeId)
            ->where('userable_type', $employeeType)
            ->exists();
    }

    private function createNewUser($request, $employee)
{
    $user = new User();
    $user->firstname = $request->firstname;
    $user->lastname = $request->lastname;
    $user->email = $request->email;
    $user->username = $request->email;
    $user->password = 'dti@2024';

    $user->userable_id = $employee->id;
    $user->userable_type = get_class($employee);
    
    $user->save();

    // ✅ Assign default role as "Employee"
    $user->assignRole('Employee');

    // ✅ Send password reset email
    $this->sendPasswordLink($user->email);
}

    

    public function edit(Employee $employee)
    {
        if (auth()->user()->cannot("update", $employee)) {
            abort(403);
        }
    
        $employmentStatus = EmploymentStatus::all();
        $functionalGroups = FunctionalGroup::all();
        $bureauOffices = BureauOffice::all();
        $divisions = Division::all();
        $positions = Position::all();
        $jobLevels = JobLevel::all();
        $userExists = $this->userAccountIfExists($employee->id, get_class($employee));
    
        // Fetch the supervisor if exists
        $supervisor = EmployeesSupervisor::where('employee_id', $employee->id)
            ->with('supervisor') // Make sure `supervisor` relationship exists in EmployeesSupervisor model
            ->first();
    
        $supervisorName = $supervisor ? "{$supervisor->supervisor->firstname} {$supervisor->supervisor->lastname}" : '';
    
        return view('employees.edit', compact(
            'employee', 
            'employmentStatus', 
            'functionalGroups', 
            'bureauOffices', 
            'divisions', 
            'positions', 
            'jobLevels', 
            'userExists',
            'supervisorName' // Pass supervisor name to view
        ));
    }
    

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        // Update employee details
        $employee->update($request->validated());
    
        // Ensure user account is created if requested
        if ($request->has('createUserAccount')) {
            if (!$this->userAccountIfExists($employee->id, get_class($employee))) {
                $this->createNewUser($request, $employee);
            } else {
                return redirect()->back()->with('error', 'This employee already has a user account.');
            }
        }
    
        // Send password reset link if requested
        if ($request->has('sendUserResetLink')) {
            $user = User::where('userable_id', $employee->id)
                ->where('userable_type', get_class($employee))
                ->first();
    
            if ($user) {
                $this->sendPasswordLink($user->email);
            }
        }
    
        // Assign Supervisor to Multiple Employees
        if ($request->has('immediate_supervisor')) {
            $supervisorName = trim($request->input('immediate_supervisor'));
    
            // Split first and last name
            $nameParts = explode(' ', $supervisorName);
            $firstname = $nameParts[0] ?? null;
            $lastname = end($nameParts) ?? null;
    
            if ($firstname && $lastname) {
                // Find supervisor in employees table
                $supervisor = Employee::where('firstname', $firstname)
                    ->where('lastname', $lastname)
                    ->first();
    
                if ($supervisor) {
                    // Get the list of selected employees (multiple IDs)
                    $employeeIds = $request->input('employee_ids', [$employee->id]); // Defaults to current employee if none provided
    
                    // Delete old supervisor relationships before inserting new ones
                    EmployeesSupervisor::whereIn('employee_id', $employeeIds)->delete();
    
                    // Assign new supervisor to selected employees
                    foreach ($employeeIds as $employeeId) {
                        EmployeesSupervisor::create([
                            'employee_id' => $employeeId,
                            'supervisor_id' => $supervisor->id
                        ]);
                    }
                }
            }
        }
    
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }
    
    
    public function destroy(Employee $employee)
    {
        // Delete the associated user account first
        User::where('userable_id', $employee->id)
            ->where('userable_type', Employee::class)
            ->delete();
    
        // Delete related records in competency_assessment_items
        \DB::table('competency_assessment_items')->where('employee_id', $employee->id)->delete();
    
        // Get competency_assessment IDs linked to this employee
        $competencyAssessmentIds = \DB::table('competency_assessments')
            ->where('employee_id', $employee->id)
            ->pluck('id');
    
        // Delete related records in career_development_plans
        \DB::table('career_development_plans')->whereIn('competency_assessment_id', $competencyAssessmentIds)->delete();
    
        // Delete related records in competency_assessments
        \DB::table('competency_assessments')->where('employee_id', $employee->id)->delete();
    
        // Now delete the employee
        $employee->delete();
    
        return redirect()->route('employees.index')->with('success', 'Employee and associated user account deleted successfully.');
    }
    

    
  // Export Employees as PDF
    public function exportPdf()
    {
        $employees = Employee::all();
        $pdf = Pdf::loadView('employees.export_pdf', compact('employees'));
        return $pdf->download('employees.pdf');
    }


    // Export Employees as CSV
    public function exportCsv()
    {
        return Excel::download(new EmployeesExport, 'employees.csv');
    }

    // Export Employees as XLS
    public function exportXls()
    {
        return Excel::download(new EmployeesExport, 'employees.xlsx');
    }
}
