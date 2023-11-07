<?php

namespace App\Http\Controllers;

use App\Models\BehavioralIndicator;
use App\Models\Competency;
use App\Models\CompetencySet;
use App\Models\CompetencyCategory;
use App\Models\EmploymentStatus;
use App\Models\FunctionalGroup;
use App\Models\BureauOffice;
use App\Models\Division;
use App\Models\Position;
use App\Models\JobLevel;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompetencyAssessmentController extends Controller
{

    public function about(Employee $employee)
    {
        return view('competency_assessment.about', compact('employee'));
    }

    public function dictionary(Employee $employee)
    {
        $competencyCategories = CompetencyCategory::all();
        $competencies = Competency::all();

        return view('competency_assessment.dictionary', compact('competencyCategories', 'competencies', 'employee'));
    }

    public function ratingScale(Employee $employee)
    {
        return view('competency_assessment.rating_scale', compact('employee'));
    }

    public function instructions(Employee $employee)
    {
        $competencySets = CompetencySet::where([
            'functional_group_id' => $employee->functional_group_id,
            'bureau_office_id' => $employee->bureau_office_id,
            'position_id' => $employee->position_id,
        ])->get();

        $competencyDetails = [];
        foreach ($competencySets as $competencySet) {
            $competency = Competency::find($competencySet->competency_id);
            $behavioralIndicators = BehavioralIndicator::where('competency_id', $competencySet->competency_id)->get();
    
            $competencyDetails[] = [
                'competency' => $competency,
                'behavioral_indicators' => $behavioralIndicators,
            ];
        }
    
        return view('competency_assessment.instructions', compact('employee', 'competencyDetails'));
    }

    public function getEmployeeProfileDetails(Employee $employee)
    {
        $loggedInUser = Auth::user();
    
        $employeeIsValid = $loggedInUser->employee;
        if ($employeeIsValid) {
            $employmentStatuses = EmploymentStatus::all();
            $functionalGroups = FunctionalGroup::all();
            $bureauOffices = BureauOffice::all();
            $divisions = Division::all();
            $positions = Position::all();
            $jobLevels = JobLevel::all();
    
            return view('competency_assessment.employee_profile', compact(
                'employmentStatuses',
                'functionalGroups',
                'bureauOffices',
                'divisions',
                'positions',
                'jobLevels',
                'employee'
            ));
        } else {
            return back()->with('error', 'Access Denied: You are not authorized to view this employee profile.');
        }
    }

    public function getCompetencies(Employee $employee, $categoryId)
    {
        $competencyCategories = CompetencyCategory::all();
        $coreCompetencies = Competency::where('competency_category_id', $categoryId)->get();
        $behavioralIndicators = BehavioralIndicator::whereIn('competency_id', $coreCompetencies->pluck('id'))->get();

        return [
            'competencyCategories' => $competencyCategories,
            'coreCompetencies' => $coreCompetencies,
            'behavioralIndicators' => $behavioralIndicators,
        ];
    }

    public function coreCompetencies(Employee $employee)
    {
        $data = $this->getCompetencies($employee, 2); // Core Competency category ID is 2
        return view('competency_assessment.core_competency', $data);
    }

    public function technicalCompetencies(Employee $employee)
    {
        $data = $this->getCompetencies($employee, 1); // Technical Competency category ID is 1
        return view('competency_assessment.technical_competency', $data);
    }

    public function leadershipCompetencies(Employee $employee)
    {
        $data = $this->getCompetencies($employee, 3); // Leadership Competency category ID is 3
        return view('competency_assessment.leadership_competency', $data);
    }

    public function summary(Employee $employee)
    {
        $competencyCategories = CompetencyCategory::all();
        $competencies = Competency::all();

        return view('competency_assessment.summary', compact('competencyCategories', 'competencies', 'employee'));
    }
}
