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

    private function authenticate(Employee $employee)
    {
        $user = Auth::user();
        if (!$user->userable_id || !($employee instanceof Employee) || $user->userable->id != $employee->id) {
            abort(403);
        }

        return true;
    }

    private function checkCompetencyAssessment(Employee $employee, $competencyAssessmentId)
    {
        $competencyAssessment = $employee->competencyAssessments->where("employee_id", $employee->id)->first();

        if ($competencyAssessment->id != $competencyAssessmentId) {
            abort(403);
        }
    }

    private function checkCategory($categoryId)
    {
        $competencyCategories = CompetencyCategory::find($categoryId);
        if (!$competencyCategories) {
            abort(404);
        }
    }

    private function checkIfCompetencyAssessmentExists(Employee $employee)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->first();

        return $competencyAssessment !== null;
    }

    private function checkIfCompetencyAssessmentItemScored(Employee $employee)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->with('items')
            ->first();

        if ($competencyAssessment) {
            return $competencyAssessment->items->every(function ($item) {
                return $item->score !== null;
            });
        }

        return false;
    }

    private function checkIfCompetencyAssessmentItemExists(Employee $employee)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->with('items')
            ->first();
    
        if ($competencyAssessment && $competencyAssessment->items->isNotEmpty()) {
            return true;
        }
    
        return false;
    }

    private function checkIfCompetencyAssessmentComplete(Employee $employee)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->where('status', 'completed')
            ->first();

        if ($competencyAssessment) {
            return $competencyAssessment->items->isNotEmpty();
        }

        return false;
    }

    public function about(Employee $employee) {
        $this->authenticate($employee);
        $categories = CompetencyCategory::all();
        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee);
    
        $competencyAssessmentItemsExist = false;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;
    
        if ($competencyAssessmentExist) {
            $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);
            $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
            $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        }
    
        return view('competency_assessment.about', compact(
            'employee', 
            'categories', 
            'competencyAssessmentExist', 
            'competencyAssessmentItemsExist', 
            'competencyAssessmentCompleted', 
            'competencyAssessmentItemsScored'
        ));
    }

    public function dictionary(Employee $employee)
    {
        $this->authenticate($employee);
        $competencyCategories = CompetencyCategory::all();
        $competencies = Competency::all();
        $competencyAssessmentItemsExist = false;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;
        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee);
        if ($competencyAssessmentExist) {
            $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);
            $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
            $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        }
        return view('competency_assessment.dictionary', compact('competencyCategories', 'competencies', 'employee', 'competencyAssessmentExist', 'competencyAssessmentItemsExist', 'competencyAssessmentCompleted', 'competencyAssessmentItemsScored'));
    }

    public function ratingScale(Employee $employee, $id)
    {
        $this->authenticate($employee);
        $competencyAssessment = CompetencyAssessment::find($id);
        $competencyAssessmentItemsExist = false;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;
        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        return view('competency_assessment.rating_scale', compact('employee', 'competencyAssessment', 'competencyAssessmentExist', 'competencyAssessmentItemsExist', 'competencyAssessmentCompleted', 'competencyAssessmentItemsScored'));
    }

    public function instructions(Employee $employee, $id)
    {
        $this->authenticate($employee);
        $this->checkCompetencyAssessment($employee, $id);
        $competencyAssessment = $employee->competencyAssessments->where("id", $id)->first();
        $competencyCategories = CompetencyCategory::all();
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);



        return view('competency_assessment.instructions', compact('employee', 'competencyAssessment', 'competencyCategories', 'competencyAssessmentItemsExist', 'competencyAssessmentCompleted', 'competencyAssessmentItemsScored'));
    }

    public function cdp(Employee $employee, $id)
    {
        $this->authenticate($employee);
        $this->checkCompetencyAssessment($employee, $id);
        $competencyAssessment = CompetencyAssessment::find($id);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);

        return view('competency_assessment.cdp', compact('employee', 'competencyAssessment', 'competencyAssessmentItemsScored', 'competencyAssessmentCompleted', 'competencyAssessmentItemsExist'));
    }
    public function getEmployeeProfileDetails(Employee $employee)
    {
        $this->authenticate($employee);


        $employmentStatuses = EmploymentStatus::all();
        $functionalGroups = FunctionalGroup::all();
        $bureauOffices = BureauOffice::all();
        $divisions = Division::all();
        $positions = Position::all();
        $jobLevels = JobLevel::all();
        $competencyAssessmentItemsExist = false;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;
        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee);
        if ($competencyAssessmentExist) {
            $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);
            $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
            $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        }

        return view('competency_assessment.employee_profile', compact(
            'employmentStatuses',
            'functionalGroups',
            'bureauOffices',
            'divisions',
            'positions',
            'jobLevels',
            'employee',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored'
        ));
    }


    public function getAssessmentForm(Employee $employee, $id, $categoryId)
    {
        $this->authenticate($employee);
        $this->checkCompetencyAssessment($employee, $id);
        $this->checkCategory($categoryId);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);
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

        if ($filteredItemsByCategory->isEmpty()) {
            return redirect()->route('competency_assessment.form', ['employee' => $employee->id, 'id' => $employee->competencyAssessments->first()->id, 'categoryId' => $categoryId + 1]);
        }

        return view('competency_assessment.form', compact('employee', 'filteredItemsByCategory', 'competencyCategory', 'competencyAssessment', 'competencyAssessmentItemsScored', 'competencyAssessmentCompleted', 'competencyAssessmentItemsExist'));
    }

    public function closing(Employee $employee, $id)
    {
        $this->authenticate($employee);
        $this->checkCompetencyAssessment($employee, $id);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);
        return view('competency_assessment.closing', compact('employee', 'competencyAssessmentCompleted', 'competencyAssessmentItemsExist'));
    }

    private function getLevelText($level)
    {
        switch ($level) {
            case 1:
                return 'Basic';
            case 2:
                return 'Intermediate';
            case 3:
                return 'Advance';
            case 4:
                return 'Superior';
            default:
                return 'Unknown';
        }
    }

    private function getPerformanceObservation($finalRating)
    {
        if ($finalRating < 0.99) return "Never";
        if ($finalRating < 1.75) return "Rarely";
        if ($finalRating < 2.5) return "Sometimes";
        if ($finalRating < 3.25) return "Frequently";
        return "Always";
    }

    private function getMasteryLevel($averageRating)
    {
        if ($averageRating < 1) return "No Proficiency";
        if ($averageRating < 2) return "Beginner";
        if ($averageRating < 3) return "Intermediate";
        if ($averageRating < 4) return "Advanced";
        return "Superior";
    }

    public function summary(Employee $employee, $id)
    {
        $this->authenticate($employee);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee);
        $competencyAssessment = $employee->competencyAssessments->where("id", $id)->first();
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee);

        $selfAssessmentItems = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->with('items.behavioralIndicator.competency.competencyCategory')
            ->first();

        $supervisorAssessmentItems = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'employee_assessment')
            ->with('items.behavioralIndicator.competency.competencyCategory')
            ->first();

        $structuredItems = [];



        foreach ($selfAssessmentItems->items as $item) {
            $competency = $item->behavioralIndicator->competency;
            $category = $competency->competencyCategory;
            // $supervisorItem = $supervisorAssessmentItems->items->firstWhere('behavioral_indicator_id', $item->behavioral_indicator_id);

            $selfAssessmentScore = $item->score;

            if ($supervisorAssessmentItems) {

                $supervisorScore = $item->score;
            }

            $supervisorScore = NULL;

            $finalRating = ($selfAssessmentScore * 0.5) + ($supervisorScore * 0.5);
            $levelText = $this->getLevelText($item->behavioralIndicator->level);
            $performanceObservation = $this->getPerformanceObservation($finalRating);

            $structuredItems[$category->id]['category_name'] = $category->category_name;
            $structuredItems[$category->id]['competencies'][$competency->id]['name'] = $competency->name;
            $structuredItems[$category->id]['competencies'][$competency->id]['indicators'][] = [
                'level' => $levelText,
                'description' => $item->behavioralIndicator->description,
                'self_assessment' => $selfAssessmentScore,
                'supervisor' => $supervisorScore,
                'final_rating' => $finalRating,
                'performance_observation' => $performanceObservation
            ];
        }

        $totalAverageRating = 0;
        $competencyCount = 0;
        foreach ($structuredItems as $categoryId => $category) {
            foreach ($category['competencies'] as $competencyId => $competency) {
                $totalFinalRating = 0;
                $count = 0;
                foreach ($competency['indicators'] as $indicator) {
                    $totalFinalRating += $indicator['final_rating'];
                    $count++;
                }

                $averageFinalRating = $count > 0 ? $totalFinalRating / $count : 0;
                $masteryLevel = $this->getMasteryLevel($averageFinalRating);

                $structuredItems[$categoryId]['competencies'][$competencyId]['average_final_rating'] = $averageFinalRating;
                $structuredItems[$categoryId]['competencies'][$competencyId]['mastery_level'] = $masteryLevel;

                $totalAverageRating += $structuredItems[$categoryId]['competencies'][$competencyId]['average_final_rating'];
                $competencyCount++;
            }
        }
        $overallAverageRating = $competencyCount > 0 ? $totalAverageRating / $competencyCount : 0;
        $overallMasteryLevel = $this->getMasteryLevel($overallAverageRating);

        return view('competency_assessment.summary', compact('employee', 'structuredItems', 'overallAverageRating', 'overallMasteryLevel', 'competencyAssessmentCompleted', 'competencyAssessment', 'competencyAssessmentItemsScored', 'competencyAssessmentItemsExist'));
    }


    private function storeCompetencyAssessmentData($currentPage, Request $request, Employee $employee)
    {
        $existingAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->first();

        if ($existingAssessment) {
            $nextPage = $this->getNextPage($currentPage);
            $existingAssessment->update(['current_page' => $nextPage]);

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
            case 'summary':
                return 'cdp';
            case 'cdp':
                return 'closing';
            default:
                abort(404);
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
            case 'summary':
                return redirect()->route('competency_assessment.cdp', ['employee' => $employee, 'id' => $competencyAssessment->id]);
            case 'cdp':
                return redirect()->route('competency_assessment.closing', ['employee' => $employee, 'id' => $competencyAssessment->id]);
            default:
                abort(404);
        }
    }

    public function storeAboutAssessment(Request $request, Employee $employee)
    {
        return $this->storeCompetencyAssessmentData('about', $request, $employee);
    }

    public function storeInstructionsAssessment(Request $request, Employee $employee)
    {
        return $this->storeCompetencyAssessmentData('instructions', $request, $employee);
    }

    public function storeDictionary(Request $request, Employee $employee)
    {
        return $this->storeCompetencyAssessmentData('dictionary', $request, $employee);
    }

    public function storeEmployeeDetails(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'employment_status' => 'required',
            'job_level' => 'required',
            'last_review_date' => 'required',
        ]);

        $employee->update([
            'employment_status_id' => $validatedData['employment_status'],
            'job_level_id' => $validatedData['job_level'],
            'last_review_at' => $validatedData['last_review_date'],
        ]);

        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->where('status', 'in_progress')
            ->first();

        if (!$competencyAssessment) {
            $competencyAssessment = new CompetencyAssessment([
                'employee_id' => $employee->id,
                'session_type' => 'self_assessment',
                'status' => 'in_progress',
                'current_page' => 'employee_profile',
                'date_started' => now(),
            ]);
            $competencyAssessment->save();
        }

        $existingItemsCount = CompetencyAssessmentItem::where('competency_assessment_id', $competencyAssessment->id)->count();

        if ($existingItemsCount === 0) {
            $competencySets = CompetencySet::where([
                'functional_group_id' => $employee->functional_group_id,
                'bureau_office_id' => $employee->bureau_office_id,
                'position_id' => $employee->position_id,
            ])->when($employee->division_id !== null, function ($query) use ($employee) {
                return $query->where('division_id', $employee->division_id);
            })->get();

            foreach ($competencySets as $competencySet) {
                $behavioralIndicators = BehavioralIndicator::where('competency_id', $competencySet->competency_id)->get();

                foreach ($behavioralIndicators as $behavioralIndicator) {
                    $assessmentItem = new CompetencyAssessmentItem([
                        'employee_id' => $employee->id,
                        'competency_assessment_id' => $competencyAssessment->id,
                        'behavioral_indicator_id' => $behavioralIndicator->id,
                        'score' => null,
                        'assessment_type' => 'self_assessment',
                    ]);
                    $assessmentItem->save();
                }
            }
        }

        return $this->storeCompetencyAssessmentData('employee_profile', $request, $employee);
    }

    public function storeRatingScale(Request $request, Employee $employee)
    {
        return $this->storeCompetencyAssessmentData('rating_scale', $request, $employee);
    }

    public function storeInstructions(Request $request, Employee $employee)
    {
        return $this->storeCompetencyAssessmentData('instructions', $request, $employee);
    }

    public function storeSummary(Request $request, Employee $employee)
    {
        return $this->storeCompetencyAssessmentData('summary', $request, $employee);
    }

    public function storeCDP(Request $request, Employee $employee)
    {
        return $this->storeCompetencyAssessmentData('cdp', $request, $employee);
    }

    public function storeAssessmentForm(Request $request, Employee $employee, $competencyAssessmentId, $currentCategoryId)
    {
        $action = $request->input('action', 'submit');
        $ratings = $request->input('rating', []);


        foreach ($ratings as $behavioralIndicatorId => $score) {
            CompetencyAssessmentItem::where([
                'employee_id' => $employee->id,
                'behavioral_indicator_id' => $behavioralIndicatorId,
                'assessment_type' => 'self_assessment'
            ])->update(['score' => $score]);
        }

        if ($action === 'save') {
            return back()->with('status', 'Scores saved successfully.');
        }

        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee);
        $allCategoryIds = CompetencyCategory::orderBy('id')->pluck('id')->toArray();
        $currentIndex = array_search($currentCategoryId, $allCategoryIds);
        $isLastCategory = !isset($allCategoryIds[$currentIndex + 1]);

        if ($competencyAssessmentItemsScored) {
            $competencyAssessment = CompetencyAssessment::find($competencyAssessmentId);
            if ($competencyAssessment) {
                $competencyAssessment->update(['status' => 'completed']);
            }
            return $this->storeCompetencyAssessmentData('form', $request, $employee);
        } else {
            if ($isLastCategory) {
                return redirect()->route('competency_assessment.instructions', ['employee' => $employee->id, 'id' => $competencyAssessmentId]);
            } else {
                $nextCategoryId = $allCategoryIds[$currentIndex + 1];
                return redirect()->route('competency_assessment.form', ['employee' => $employee->id, 'id' => $competencyAssessmentId, 'categoryId' => $nextCategoryId]);
            }
        }
    }
}
