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

    public function ratingScale(Employee $employee, $id)
    {
        $competencyAssessment = CompetencyAssessment::find($id);
        return view('competency_assessment.rating_scale', compact('employee', 'competencyAssessment'));
    }

    public function instructions(Employee $employee, $id)
    {
        $competencyAssessment = $employee->competencyAssessments->where("id", $id)->first();
        $competencyCategories = CompetencyCategory::all();

        return view('competency_assessment.instructions', compact('employee', 'competencyAssessment', 'competencyCategories'));
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


    public function getAssessmentForm(Employee $employee, $id, $categoryId)
    {
        $competencyAssessment = $employee->competencyAssessments->where("id", $id)->first();
        $competencyCategory = CompetencyCategory::find($categoryId);

        $filteredItemsByCategory = $competencyAssessment->items->filter(function ($item) use ($categoryId) {
            return $item->behavioralIndicator->competency->competency_category_id == $categoryId;
        })->map(function ($item) {
            $existingItem = CompetencyAssessmentItem::where([
                'employee_id' => $item->employee_id,
                'behavioral_indicator_id' => $item->behavioral_indicator_id
            ])->first();

            $item->score = $existingItem ? $existingItem->score : null;
            return $item;
        });

        return view('competency_assessment.form', compact('employee', 'filteredItemsByCategory', 'competencyCategory', 'competencyAssessment'));
    }


    public function summary(Employee $employee)
    {
        // Fetch all competency assessment items for the specific employee
        $assessmentItems = CompetencyAssessmentItem::with('behavioralIndicator.competency.competencyCategory')
            ->where('employee_id', $employee->id)
            ->where('assessment_type', 'self_assessment')
            ->get();

        return view('competency_assessment.summary', compact('employee', 'assessmentItems'));
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
                $competencySetQuery = CompetencySet::where([
                    'functional_group_id' => $employee->functional_group_id,
                    'bureau_office_id' => $employee->bureau_office_id,
                    'position_id' => $employee->position_id,
                ]);

                if ($employee->division_id !== null) {
                    $competencySetQuery = $competencySetQuery->where('division_id', $employee->division_id);
                }

                $competencySets = $competencySetQuery->get();

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
                return 'form';
            case 'form':
                return 'summary';

            default:
                return 'error';
        }
    }

    private function getViewForPage($currentPage, Employee $employee)
    {
        $competencyAssessment = $employee->competencyAssessments->where('employee_id', $employee->id)->first();

        switch ($currentPage) {
            case 'about':
                return redirect()->route('competency_assessment.dictionary', ['employee' => $employee]);
            case 'dictionary':
                return redirect()->route('competency_assessment.employee_profile', ['employee' => $employee]);
            case 'employee_profile':
                return redirect()->route('competency_assessment.rating_scale', ['employee' => $employee, 'id' => $competencyAssessment->id]);
            case 'rating_scale':
                return redirect()->route('competency_assessment.instructions', ['employee' => $employee, 'id' => $competencyAssessment->id]);
            case 'instructions':
                return redirect()->route('competency_assessment.form', ['employee' => $employee, 'id' => $competencyAssessment->id, 'categoryId' => 1]);
            case 'form':
                return redirect()->route('competency_assessment.summary', ['employee' => $employee, 'id' => $competencyAssessment->id]);
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

    public function storeSummary(Request $request, Employee $employee)
    {
        return $this->storeAssessmentData('summary', $request, $employee);
    }

    public function storeAssessmentForm(Request $request, Employee $employee, $competencyAssessmentId, $currentCategoryId)
    {
        $ratings = $request->input('rating', []);
        foreach ($ratings as $behavioralIndicatorId => $score) {
            CompetencyAssessmentItem::where([
                'employee_id' => $employee->id,
                'behavioral_indicator_id' => $behavioralIndicatorId,
                'assessment_type' => 'self_assessment'
            ])->update(['score' => $score]);
        }

        $allCategoryIds = CompetencyCategory::orderBy('id')->pluck('id')->toArray();

        $currentIndex = array_search($currentCategoryId, $allCategoryIds);

        if (isset($allCategoryIds[$currentIndex + 1])) {
            $nextCategoryId = $allCategoryIds[$currentIndex + 1];
            return redirect()->route('competency_assessment.form', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id, 'categoryId' => $nextCategoryId]);
        } else {
            return $this->storeAssessmentData('form', $request, $employee);
        }
    }
}
