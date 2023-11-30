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

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);

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
        $employee = Employee::create($request->all());
        if ($this->userAccountIfExists($employee->id, get_class($employee))) {
            return redirect()->back()->with('error', 'Email already in use.');
        }

        if ($request->has('createUserAccount')) {
            $this->createNewUser($request, $employee);
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
        $user->password = 'dti@2023';


        $user->userable_id = $employee->id;
        $user->userable_type = get_class($employee);

        $user->save();
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
        return view('employees.edit', compact('employee', 'employmentStatus', 'functionalGroups', 'bureauOffices', 'divisions', 'positions', 'jobLevels', 'userExists'));
    }


    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated());

        if ($request->has('createUserAccount')) {
            if (!$this->userAccountIfExists($employee->id, get_class($employee))) {
                $this->createNewUser($request, $employee);
            } else {
                return redirect()->back()->with('error', 'This employee already has a user account.');
            }
        }

        if ($request->has('sendUserResetLink')) {
            $user = User::where('userable_id', $employee->id)
                ->where('userable_type', get_class($employee))
                ->first();

            if ($user) {
                $this->sendPasswordLink($user->email);
            }
        }

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }


    public function destroy(Employee $employee)
    {
        $employeez=$employee->find($employee->id);
        $employee->delete();
      
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }

    
}
