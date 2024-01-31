<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\EmployeesSupervisor;


class EmployeesSupervisorsController extends Controller
{
    public function showTaggedEmployees($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        $taggedEmployees = $employee->supervisedEmployees()->paginate(1);
    
        return view('employees_supervisors.tags', compact('employee', 'taggedEmployees'));
    }
    public function showTagForm($employee)
    {
        $supervisor = Employee::findOrFail($employee);
        $employees = Employee::all();

        return view('employees_supervisors.create', compact('employees', 'supervisor'));
    }

    public function storeTag(Request $request)
    {
        $supervisorId = $request->input('supervisor_id');
        $employeeId = $request->input('employee_id');
    
        if ($supervisorId === $employeeId) {
            return redirect()->route('employees_supervisors.tags.index', $supervisorId)
                ->with('success', 'You cannot tag same supervisor.');
        }
    
        $existingTag = EmployeesSupervisor::where('supervisor_id', $supervisorId)
            ->where('employee_id', $employeeId)
            ->first();
    
        if (!$existingTag) {
            EmployeesSupervisor::create([
                'supervisor_id' => $supervisorId,
                'employee_id' => $employeeId,
            ]);
        }
    
        return redirect()->route('employees_supervisors.tags.index', $supervisorId)->with('success', 'Employee tagged successfully.');
    }
    
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
    
    
    
    

    public function searchEmployees(Request $request)
    {
        $searchQuery = $request->input('q');

        $results = Employee::where('firstname', 'LIKE', "%$searchQuery%")
            ->orWhere('lastname', 'LIKE', "%$searchQuery%")
            ->get();

        return response()->json($results);
    }
}
