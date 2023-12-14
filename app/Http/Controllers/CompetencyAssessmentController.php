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

    private function authenticate(Employee $employee, $session_type)
    {
        $user = Auth::user();

        if ($session_type == 'self_assessment' && (!$user->userable_id || $user->userable->id != $employee->id)) {
            abort(403);
        }

        if ($session_type == 'employee_assessment' && !$user->userable->supervisedEmployees->contains($employee->id)) {
            abort(403);
        }

        return true;
    }

    private function checkCompetencyAssessment(Employee $employee, $id, $session_type)
    {
        $competencyAssessment = $employee->competencyAssessments
            ->where("id", $id)
            ->where("session_type", $session_type)
            ->first();

        if (!$competencyAssessment) {
            abort(403, 'Competency Assessment not found or access denied.');
        }
    }


    private function checkCategory($categoryId)
    {
        $competencyCategories = CompetencyCategory::find($categoryId);
        if (!$competencyCategories) {
            abort(404);
        }
    }

    private function checkIfCompetencyAssessmentExists(Employee $employee, $session_type)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();
        return $competencyAssessment !== null;
    }

    private function checkIfCompetencyAssessmentItemScored(Employee $employee, $session_type)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->with('items')
            ->first();

        if ($competencyAssessment) {
            return $competencyAssessment->items->every(function ($item) {
                return $item->score !== null;
            });
        }

        return false;
    }

    private function checkIfCompetencyAssessmentItemExists(Employee $employee, $session_type)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->with('items')
            ->first();

        if ($competencyAssessment && $competencyAssessment->items->isNotEmpty()) {
            return true;
        }

        return false;
    }

    private function checkIfCompetencyAssessmentComplete(Employee $employee, $session_type)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->where('status', 'completed')
            ->first();

        if ($competencyAssessment) {
            return $competencyAssessment->items->isNotEmpty();
        }

        return false;
    }

    private function validateSessionType($session_type)
    {
        if (!in_array($session_type, ['self_assessment', 'employee_assessment'])) {
            abort(404);
        }
    }
    public function about(Employee $employee, $session_type)
    {
        $this->authenticate($employee, $session_type);
        $this->validateSessionType($session_type);
        $categories = CompetencyCategory::all();
        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee, $session_type);

        $competencyAssessmentItemsExist = false;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;

        if ($competencyAssessmentExist) {
            $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
            $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
            $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        }

        return view('competency_assessment.about', compact(
            'employee',
            'categories',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored',
            'session_type'
        ));
    }

    public function dictionary(Employee $employee, $session_type)
    {
        $this->authenticate($employee, $session_type);
        $competencyCategories = CompetencyCategory::all();
        $competencies = Competency::all();
        $competencyAssessmentItemsExist = false;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;
        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee, $session_type);
        if ($competencyAssessmentExist) {
            $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
            $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
            $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        }
        return view('competency_assessment.dictionary', compact(
            'competencyCategories',
            'competencies',
            'employee',
            'session_type',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored'
        ));
    }

    public function ratingScale(Employee $employee, $session_type, $id)
    {
        $this->authenticate($employee, $session_type);
        $competencyAssessment = CompetencyAssessment::where('id', $id)
            ->where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();

        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);

        return view('competency_assessment.rating_scale', compact(
            'employee',
            'session_type',
            'competencyAssessment',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored'
        ));
    }

    public function instructions(Employee $employee, $session_type, $id)
    {
        $this->authenticate($employee, $session_type);

        $competencyAssessment = CompetencyAssessment::where('id', $id)
            ->where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();

        $competencyCategories = CompetencyCategory::all();

        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);

        return view('competency_assessment.instructions', compact(
            'employee',
            'session_type',
            'competencyAssessment',
            'competencyCategories',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored'
        ));
    }


    public function cdp(Employee $employee, $session_type, $id)
    {
        $this->authenticate($employee, $session_type);
        $this->checkCompetencyAssessment($employee, $id, $session_type);
        $competencyAssessment = CompetencyAssessment::find($id);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);

        return view('competency_assessment.cdp', compact(
            'employee',
            'session_type',
            'competencyAssessment',
            'competencyAssessmentItemsScored',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsExist'
        ));
    }
    public function getEmployeeProfileDetails(Employee $employee, $session_type)
    {
        $this->authenticate($employee, $session_type);


        $employmentStatuses = EmploymentStatus::all();
        $functionalGroups = FunctionalGroup::all();
        $bureauOffices = BureauOffice::all();
        $divisions = Division::all();
        $positions = Position::all();
        $jobLevels = JobLevel::all();
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();
        $competencyAssessmentItemsExist = false;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;

        $competencyAssessmentExist = $this->checkIfCompetencyAssessmentExists($employee, $session_type);
        if ($competencyAssessmentExist) {
            $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
            $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
            $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        }

        return view('competency_assessment.employee_profile', compact(
            'competencyAssessment',
            'employmentStatuses',
            'functionalGroups',
            'bureauOffices',
            'divisions',
            'positions',
            'jobLevels',
            'employee',
            'session_type',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored'
        ));
    }


    public function getAssessmentForm(Employee $employee, $session_type, $id, $categoryId)
    {
        $this->authenticate($employee, $session_type);
        $this->checkCompetencyAssessment($employee, $id, $session_type);
        $this->checkCategory($categoryId);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
        $competencyAssessment = CompetencyAssessment::where('id', $id)
            ->where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();
        $competencyCategory = CompetencyCategory::find($categoryId);

        $filteredItemsByCategory = $competencyAssessment->items->filter(function ($item) use ($categoryId) {
            return $item->behavioralIndicator->competency->competency_category_id == $categoryId;
        })->map(function ($item) use ($employee) {

            $selfAssessmentItem = CompetencyAssessmentItem::where([
                'employee_id' => $employee->id,
                'assessment_type' => 'self_assessment',
                'behavioral_indicator_id' => $item->behavioral_indicator_id
            ])->first();

            $existingItem = CompetencyAssessmentItem::where([
                'employee_id' => $item->employee_id,
                'assessment_type' => $item->assessment_type,
                'behavioral_indicator_id' => $item->behavioral_indicator_id
            ])->first();

            $item->score = $existingItem ? $existingItem->score : null;
            $item->selfAssessmentScore = $selfAssessmentItem ? $selfAssessmentItem->score : null;

            return $item;
        });

        if ($filteredItemsByCategory->isEmpty()) {
            return redirect()->route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => $categoryId + 1]);
        }

        return view('competency_assessment.form', compact('employee', 'session_type', 'filteredItemsByCategory', 'competencyCategory', 'competencyAssessment', 'competencyAssessmentItemsScored', 'competencyAssessmentCompleted', 'competencyAssessmentItemsExist'));
    }

    public function closing(Employee $employee, $session_type, $id)
    {
        $this->authenticate($employee,  $session_type);

        $this->checkCompetencyAssessment($employee, $id, $session_type);
        $competencyAssessment = CompetencyAssessment::find($id);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
        return view('competency_assessment.closing', compact('employee', 'session_type', 'competencyAssessment', 'competencyAssessmentCompleted', 'competencyAssessmentItemsExist'));
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

    public function summary(Employee $employee, $session_type, $id)
    {
        // Existing authentication and setup code
        $this->authenticate($employee, $session_type);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessment = $employee->competencyAssessments->where("id", $id)->first();
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);
    
        // Fetch self-assessment and supervisor assessment items
        $selfAssessmentItems = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->with('items.behavioralIndicator.competency.competencyCategory')
            ->first();
    
        $supervisorAssessmentItems = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'employee_assessment')
            ->with('items.behavioralIndicator.competency.competencyCategory')
            ->first();
    
        // Initialize structured items array
        $structuredItems = [];
    
        foreach ($selfAssessmentItems->items as $item) {
            // Process each item to extract necessary data
            $competency = $item->behavioralIndicator->competency;
            $category = $competency->competencyCategory;
            $selfAssessmentScore = $item->score;
            $supervisorScore = null;
    
            // Get supervisor score if available
            if ($supervisorAssessmentItems) {
                $supervisorItem = $supervisorAssessmentItems->items->first(function ($supItem) use ($item) {
                    return $supItem->behavioral_indicator_id == $item->behavioral_indicator_id;
                });
    
                if ($supervisorItem) {
                    $supervisorScore = $supervisorItem->score;
                }
            }
    
            // Calculate final rating and other relevant details
            $finalRating = ($selfAssessmentScore * 0.5) + ($supervisorScore * 0.5);
            $levelText = $this->getLevelText($item->behavioralIndicator->level);
            $performanceObservation = $this->getPerformanceObservation($finalRating);
            $competencyStandard = CompetencySet::where('competency_id', $competency->id)
                                ->first()->standard ?? null;
    
            // Add item to structuredItems array
            $structuredItems[$category->id]['category_name'] = $category->category_name;
            $structuredItems[$category->id]['competencies'][$competency->id]['name'] = $competency->name;
            $structuredItems[$category->id]['competencies'][$competency->id]['indicators'][] = [
                'level' => $levelText,
                'description' => $item->behavioralIndicator->description,
                'self_assessment' => $selfAssessmentScore,
                'supervisor' => $supervisorScore,
                'final_rating' => $finalRating,
                'performance_observation' => $performanceObservation,
                'standard' => $competencyStandard
            ];
        }
    
        // Calculate average rating per level and overall average for each competency
        foreach ($structuredItems as $categoryId => $category) {
            foreach ($category['competencies'] as $competencyId => $competency) {
                $levelRatings = []; // Sum of ratings for each level
                $levelCounts = []; // Count of indicators for each level
    
                // Calculate sum and count for each level
                foreach ($competency['indicators'] as $indicator) {
                    $level = $indicator['level'];
                    $rating = $indicator['final_rating'];
    
                    if (!isset($levelRatings[$level])) {
                        $levelRatings[$level] = 0;
                        $levelCounts[$level] = 0;
                    }
    
                    $levelRatings[$level] += $rating;
                    $levelCounts[$level]++;
                }
    
                // Calculate average rating for each level
                foreach ($levelRatings as $level => $sumRating) {
                    $averageRating = $levelCounts[$level] > 0 ? $sumRating / $levelCounts[$level] : 0;
                    $structuredItems[$categoryId]['competencies'][$competencyId]['levels'][$level]['average_rating'] = $averageRating;
                }
    
                // Calculate overall average for the competency
                $totalRating = array_sum($levelRatings);
                $totalCount = array_sum($levelCounts);
                $overallAverage = $totalCount > 0 ? $totalRating / $totalCount : 0;
                $masteryLevel = $this->getMasteryLevel($overallAverage);
                $structuredItems[$categoryId]['competencies'][$competencyId]['overall_average_rating'] = $overallAverage;
                $structuredItems[$categoryId]['competencies'][$competencyId]['mastery_level'] = $masteryLevel;
            }
        }
    
        // Calculate the overall average rating across all competencies
        $totalAverageRating = 0;
        $competencyCount = 0;
        foreach ($structuredItems as $category) {
            foreach ($category['competencies'] as $competency) {
                $totalAverageRating += $competency['overall_average_rating'];
                $competencyCount++;
            }
        }
        $overallAverageRating = $competencyCount > 0 ? $totalAverageRating / $competencyCount : 0;
        $overallMasteryLevel = $this->getMasteryLevel($overallAverageRating);
    
        // Return the view with all the calculated data
        return view('competency_assessment.summary', compact('employee', 'session_type', 'structuredItems', 'overallAverageRating', 'overallMasteryLevel', 'competencyAssessmentCompleted', 'competencyAssessment', 'competencyAssessmentItemsScored', 'competencyAssessmentItemsExist'));
    }
    


    protected function getCompetencyStandard($competencyId)
    {
        $competencySet = CompetencySet::where('competency_id', $competencyId)->first();
        return $competencySet ? $competencySet->standard : null;
    }


    private function storeCompetencyAssessmentData($currentPage, Request $request, Employee $employee, $session_type)
    {
        $existingAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();

        if ($existingAssessment) {
            $nextPage = $this->getNextPage($currentPage);
            $existingAssessment->update(['current_page' => $nextPage]);
            return $this->getViewForPage($currentPage, $employee, $session_type);
        }

        $assessor_id = null;
        if ($session_type == 'employee_assessment') {
            $assessor_id = Auth::user()->userable_id;
        }

        $competency_assessment = new CompetencyAssessment([
            'employee_id' => $employee->id,
            'session_type' => $session_type,
            'assessor_id' => $assessor_id,
            'status' => 'in_progress',
            'current_page' => $currentPage,
            'date_started' => now(),
        ]);

        if ($competency_assessment->save()) {
            $nextPage = $this->getNextPage($currentPage);
            $competency_assessment->update(['current_page' => $nextPage]);
            return $this->getViewForPage($currentPage, $employee, $session_type);
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

    private function getViewForPage($currentPage, Employee $employee, $session_type)
    {
        $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();
        switch ($currentPage) {
            case 'about':
                return redirect()->route('competency_assessment.dictionary', ['employee' => $employee, 'session_type' => $session_type]);
            case 'dictionary':
                return redirect()->route('competency_assessment.employee_profile', ['employee' => $employee, 'session_type' => $session_type]);
            case 'employee_profile':
                return redirect()->route('competency_assessment.rating_scale', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]);
            case 'rating_scale':
                return redirect()->route('competency_assessment.instructions', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]);
            case 'instructions':
                return redirect()->route('competency_assessment.form', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id, 'categoryId' => 1]);
            case 'form':
                return redirect()->route('competency_assessment.summary', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]);
            case 'summary':
                return redirect()->route('competency_assessment.cdp', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]);
            case 'cdp':
                return redirect()->route('competency_assessment.closing', ['employee' => $employee, 'session_type' => $session_type, 'id' => $competencyAssessment->id]);
            default:
                abort(404);
        }
    }


    public function storeAboutAssessment(Request $request, Employee $employee, $session_type)
    {
        return $this->storeCompetencyAssessmentData('about', $request, $employee, $session_type);
    }

    public function storeDictionary(Request $request, Employee $employee, $session_type)
    {
        return $this->storeCompetencyAssessmentData('dictionary', $request, $employee, $session_type);
    }

    public function storeEmployeeDetails(Request $request, Employee $employee, $session_type)
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
            ->where('session_type', $session_type)
            ->where('status', 'in_progress')
            ->first();

        if (!$competencyAssessment) {
            $competencyAssessment = new CompetencyAssessment([
                'employee_id' => $employee->id,
                'session_type' => $session_type,
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
                        'assessment_type' => $session_type,
                    ]);
                    $assessmentItem->save();
                }
            }
        }

        return $this->storeCompetencyAssessmentData('employee_profile', $request, $employee, $session_type);
    }

    public function storeRatingScale(Request $request, Employee $employee, $session_type)
    {
        return $this->storeCompetencyAssessmentData('rating_scale', $request, $employee, $session_type);
    }

    public function storeInstructions(Request $request, Employee $employee, $session_type)
    {
        return $this->storeCompetencyAssessmentData('instructions', $request, $employee, $session_type);
    }

    public function storeSummary(Request $request, Employee $employee, $session_type)
    {
        return $this->storeCompetencyAssessmentData('summary', $request, $employee, $session_type);
    }

    public function storeCDP(Request $request, Employee $employee, $session_type)
    {
        return $this->storeCompetencyAssessmentData('cdp', $request, $employee, $session_type);
    }

    public function storeAssessmentForm(Request $request, Employee $employee, $session_type, $competencyAssessmentId, $currentCategoryId)
    {
        $action = $request->input('action', 'submit');
        $ratings = $request->input('rating', []);

        foreach ($ratings as $behavioralIndicatorId => $score) {
            CompetencyAssessmentItem::where([
                'employee_id' => $employee->id,
                'behavioral_indicator_id' => $behavioralIndicatorId,
                'assessment_type' => $session_type
            ])->update(['score' => $score]);
        }


        if ($action === 'save') {
            return back()->with('status', 'Scores saved successfully.');
        }

        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $allCategoryIds = CompetencyCategory::orderBy('id')->pluck('id')->toArray();
        $currentIndex = array_search($currentCategoryId, $allCategoryIds);
        $isLastCategory = !isset($allCategoryIds[$currentIndex + 1]);

        if ($competencyAssessmentItemsScored) {
            $competencyAssessment = CompetencyAssessment::find($competencyAssessmentId);
            if ($competencyAssessment) {
                $competencyAssessment->update(['status' => 'completed']);
            }
            return $this->storeCompetencyAssessmentData('form', $request, $employee, $session_type);
        } else {
            if ($isLastCategory) {
                return redirect()->route('competency_assessment.instructions', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessmentId]);
            } else {
                $nextCategoryId = $allCategoryIds[$currentIndex + 1];
                return redirect()->route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessmentId, 'categoryId' => $nextCategoryId]);
            }
        }
    }

    public function employeeAssessment($session_type)
    {
        $supervisorId = auth()->user()->userable_id;
        $supervisor = Employee::find($supervisorId);
        $employee = $supervisor;
        $supervisedEmployees = $supervisor->supervisedEmployees()->get();

        foreach ($supervisedEmployees as $supervisedEmployee) {
            $selfAssessment = CompetencyAssessment::where('employee_id', $supervisedEmployee->id)
                ->where('session_type', 'self_assessment')
                ->first();

            $employeeAssessment = CompetencyAssessment::where('employee_id', $supervisedEmployee->id)
                ->where('session_type', 'employee_assessment')
                ->first();

            $supervisedEmployee->competencyAssessmentId = $employeeAssessment ? $employeeAssessment->id : null;

            if ($selfAssessment && $selfAssessment->status == 'completed' && (!$employeeAssessment || $employeeAssessment->status != 'completed')) {
                $supervisedEmployee->assessment_status = 'for evaluation';
            } elseif ($employeeAssessment && $employeeAssessment->status == 'in_progress') {
                $supervisedEmployee->assessment_status = 'continue';
            } elseif ($selfAssessment && $selfAssessment->status == 'completed' && $employeeAssessment && $employeeAssessment->status == 'completed') {
                $supervisedEmployee->assessment_status = 'completed';
            } else {
                $supervisedEmployee->assessment_status = 'pending';
            }
        }

        return view('competency_assessment.employee_assessment', compact(
            'employee',
            'session_type',
            'supervisedEmployees'
        ));
    }
}
