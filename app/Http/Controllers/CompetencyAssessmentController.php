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
use App\Models\CompetencyAssessment;
use App\Models\CompetencyAssessmentItem;
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
        $competencyItems = CompetencyAssessmentItem::with(['behavioralIndicator.competency.competencyCategory'])
            ->where('employee_id', $employee->id)
            ->get();

        $competencyDetails = [];

        foreach ($competencyItems as $item) {
            $competency = $item->behavioralIndicator->competency;
            $competencyId = $competency->id;


            if (!isset($competencyDetails[$competencyId])) {
                $competencyDetails[$competencyId] = [
                    'competency' => $competency,
                    'category' => $competency->competencyCategory->category_name,
                    'name' => $competency->name,
                    'no_of_questions' => 0,
                    'behavioral_indicators' => [],
                ];
            }

            $competencyDetails[$competencyId]['no_of_questions']++;

            $competencyDetails[$competencyId]['behavioral_indicators'][] = $item->behavioralIndicator;
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
        $competencyCategories = CompetencyCategory::with('competencies.behavioralIndicators')->get();

        $coreCompetencies = $competencyCategories
            ->find($categoryId)
            ->competencies
            ->pluck('behavioralIndicators')
            ->flatten();

        $assessmentItems = CompetencyAssessmentItem::where([
            'employee_id' => $employee->id,
        ])->with('behavioralIndicator')
            ->whereHas('behavioralIndicator', function ($query) use ($categoryId) {
                $query->whereHas('competency', function ($query) use ($categoryId) {
                    $query->where('competency_category_id', $categoryId);
                });
            })
            ->get();

        return [
            'competencyCategories' => $competencyCategories,
            'coreCompetencies' => $coreCompetencies,
            'assessmentItems' => $assessmentItems,
        ];
    }



    public function coreCompetencies(Employee $employee)
    {
        $competencies = Competency::All();
        //$data = $this->getCompetencies($employee, 1);
        return view('competency_assessment.core_competency', compact('employee'));
    }

    public function technicalCompetencies(Employee $employee)
    {
        $data = $this->getCompetencies($employee, 2);
        return view('competency_assessment.technical_competency', compact('data'));
    }

    public function leadershipCompetencies(Employee $employee)
    {
        $data = $this->getCompetencies($employee, 3);
        return view('competency_assessment.leadership_competency', compact('data'));
    }

    public function summary(Employee $employee)
    {
        $competencyCategories = CompetencyCategory::all();
        $competencies = Competency::all();

        return view('competency_assessment.summary', compact('competencyCategories', 'competencies', 'employee'));
    }

    private function storeAssessmentData($currentPage, Request $request, Employee $employee)
    {
        $existingAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->where('status', 'in_progress')
            ->first();

        if ($existingAssessment) {
            $nextPage = $this->getNextPage($currentPage);
            $existingAssessment->update(['current_page' => $nextPage]);

            if ($currentPage == 'employee_profile') {
                $query = CompetencySet::where([
                    'functional_group_id' => $employee->functional_group_id,
                    'bureau_office_id' => $employee->bureau_office_id,
                    'position_id' => $employee->position_id,
                ]);

                if ($employee->division_id !== null) {
                    $query = $query->where('division_id', $employee->division_id);
                }

                $competencySets = $query->get();

                foreach ($competencySets as $competencySet) {
                    $behavioralIndicators = BehavioralIndicator::where('competency_id', $competencySet->competency_id)->get();

                    foreach ($behavioralIndicators as $behavioralIndicator) {

                        $existingItem = CompetencyAssessmentItem::where('competency_assessment_id', $existingAssessment->id)
                            ->where('behavioral_indicator_id', $behavioralIndicator->id)
                            ->first();

                        if (!$existingItem) {
                            $assessmentItem = new CompetencyAssessmentItem([
                                'employee_id' => $employee->id,
                                'competency_assessment_id' => $existingAssessment->id,
                                'behavioral_indicator_id' => $behavioralIndicator->id,
                                'score' => null,
                                'assessment_type' => 'self_assessment',
                            ]);

                            $assessmentItem->save();
                        }
                    }
                }
            }
            if ($currentPage == 'core_competency'){

            }

            return $this->getViewForPage($currentPage, $employee);
        }

        $competency_assessment = new CompetencyAssessment([
            'employee_id' => $employee->id,
            'session_type' => 'self_assessment',
            'assessor_id' => null,
            'status' => 'in_progress',
            'current_page' => $currentPage,
            'date_started' => now(),
        ]);

        if ($competency_assessment->save()) {
            $nextPage = $this->getNextPage($currentPage);
            $competency_assessment->update(['current_page' => $nextPage]);
            return $this->getViewForPage($currentPage, $employee);
        }
    }



    private function getNextPage($currentPage)
    {
        switch ($currentPage) {
            case 'about':
                return 'dictionary';
            case 'dictionary':
                return 'employee_profile';
            case 'employee_profile':
                return 'rating_scale';
            case 'rating_scale':
                return 'instructions';
            case 'instructions':
                return 'core_competency';
            case 'technical_competency':
                return 'leadership_competency';
            case 'leadership_competency':
                return 'summary_rating';

            default:
                return 'error';
        }
    }

    private function getViewForPage($currentPage, Employee $employee)
    {
        switch ($currentPage) {
            case 'about':
                return redirect()->route('competency_assessment.dictionary', ['employee' => $employee]);
            case 'dictionary':
                return redirect()->route('competency_assessment.employee_profile', ['employee' => $employee]);
            case 'employee_profile':
                return redirect()->route('competency_assessment.rating_scale', ['employee' => $employee]);
            case 'rating_scale':
                return redirect()->route('competency_assessment.instructions', ['employee' => $employee]);
            case 'instructions':
                return redirect()->route('competency_assessment.core_competency', ['employee' => $employee]);
            case 'core_competency':
                return redirect()->route('competency_assessment.technical_competency', ['employee' => $employee]);
            case 'technical_competency':
                return redirect()->route('competency_assessment.leadership_competency', ['employee' => $employee]);
            case 'leadership_competency':
                return redirect()->route('competency_assessment.summary_rating', ['employee' => $employee]);
            default:
                return view('error');
        }
    }

    public function storeAboutAssessment(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('about', $request, $employee);
    }

    public function storeInstructionsAssessment(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('instructions', $request, $employee);
    }

    public function storeDictionary(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('dictionary', $request, $employee);
    }

    public function storeEmployeeDetails(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('employee_profile', $request, $employee);
    }

    public function storeRatingScale(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('rating_scale', $request, $employee);
    }

    public function storeInstructions(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('instructions', $request, $employee);
    }

    public function storeCoreCompetency(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('core_competency', $request, $employee);
    }

    public function storeTechnicalCompetency(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('technical_competency', $request, $employee);
    }

    public function storeLeadershipCompetency(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('leadership_competency', $request, $employee);
    }

    public function storeSummary(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('summary', $request, $employee);
    }
}
