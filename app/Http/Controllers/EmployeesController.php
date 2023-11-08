<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\Http\Request;
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
        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        if(auth()->user()->cannot("update", $employee)){
            abort(403);
        }
        $employmentStatus = EmploymentStatus::all();
        $functionalGroups = FunctionalGroup::all();
        $bureauOffices = BureauOffice::all();
        $divisions = Division::all();
        $positions = Position::all();
        $jobLevels = JobLevel::all();
    
        return view('employees.edit', compact('employee', 'employmentStatus', 'functionalGroups', 'bureauOffices', 'divisions', 'positions', 'jobLevels'));
    }
    

    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->validated()); 
    
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }
    
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
