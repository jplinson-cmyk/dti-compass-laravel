<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeesSupervisor;

class EmployeesSupervisorsController extends Controller
{
    /**
     * Display the employees supervised by a given employee.
     */
    public function showTaggedEmployees($employee_id)
    {
        // Find the supervisor by employee ID
        $employee = Employee::findOrFail($employee_id);

        // Get all employees that this supervisor manages
        $taggedEmployees = $employee->supervisedEmployees()->paginate(10);

        return view('employees_supervisors.tags', compact('employee', 'taggedEmployees'));
    }

    /**
     * Show the form for tagging an employee under a supervisor.
     */
    public function showTagForm($employee)
    {
        $supervisor = Employee::findOrFail($employee);

        // Retrieve all employees to allow selection
        $employees = Employee::all();

        return view('employees_supervisors.create', compact('employees', 'supervisor'));
    }

    /**
     * Store a new supervisor-employee relationship.
     */
    public function storeTag(Request $request)
    {
        // Validate incoming data
        $request->validate([
            'supervisor_id' => 'required|exists:employees,id',
            'employee_id'   => 'required|exists:employees,id|different:supervisor_id'
        ]);

        $supervisorId = $request->input('supervisor_id');
        $employeeId = $request->input('employee_id');

        // Prevent duplicate supervisor-employee relationships
        $existingTag = EmployeesSupervisor::where('supervisor_id', $supervisorId)
            ->where('employee_id', $employeeId)
            ->first();

        if (!$existingTag) {
            EmployeesSupervisor::create([
                'supervisor_id' => $supervisorId,
                'employee_id'   => $employeeId,
            ]);

            return redirect()->route('employees_supervisors.tags.index', $supervisorId)
                ->with('success', 'Employee tagged successfully.');
        }

        return redirect()->route('employees_supervisors.tags.index', $supervisorId)
            ->with('warning', 'This employee is already tagged under this supervisor.');
    }

    /**
     * Remove a supervisor-employee relationship.
     */
    public function destroy($employee, $employee_id)
    {
        $record = EmployeesSupervisor::where('supervisor_id', $employee)
            ->where('employee_id', $employee_id)
            ->first();

        if (!$record) {
            return redirect()->back()->with('error', 'Record not found.');
        }

        $record->delete();

        return redirect()->back()->with('success', 'Employee untagged successfully.');
    }

    /**
     * Search for employees by first or last name (for autocomplete).
     */
    public function searchEmployees(Request $request)
    {
        $searchQuery = $request->input('q');
    
        // Retrieve employees whose first or last name matches the search query
        $results = Employee::where('firstname', 'LIKE', "%$searchQuery%")
            ->orWhere('lastname', 'LIKE', "%$searchQuery%")
            ->limit(5) // Limit results to improve performance
            ->get(['id', 'firstname', 'lastname']);
    
        return response()->json($results);
    }

    /**
     * Automatically assign a supervisor during employee creation or update.
     */
    public function assignSupervisor(Request $request, $employeeId)
    {
        $employee = Employee::findOrFail($employeeId);

        if ($request->filled('immediate_supervisor')) {
            // Find supervisor by full name
            $supervisor = Employee::whereRaw("CONCAT(firstname, ' ', lastname) = ?", [$request->immediate_supervisor])
                ->first();

            if ($supervisor) {
                EmployeesSupervisor::updateOrCreate(
                    ['employee_id' => $employee->id],
                    ['supervisor_id' => $supervisor->id]
                );

                return response()->json(['message' => 'Supervisor assigned successfully.']);
            }
        }

        return response()->json(['error' => 'Supervisor not found.'], 404);
    }
}
