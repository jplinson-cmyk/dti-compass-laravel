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
use App\Models\CareerDevelopmentPlan;
use App\Models\DevelopmentActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\CompetencyAssessmentCompletedNotification;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\PDAP;
use App\Models\JobFamily;
use App\Models\JobFamilyCompetency;
use Illuminate\Support\Facades\Log;



class CompetencyAssessmentController extends Controller
{

    private function authenticate(Employee $employee, $session_type)
{
    $user = Auth::user();

    if (!$user) {
        abort(403, 'User is not logged in.');
    }

    if ($session_type == 'self_assessment' && 
        (!$user->userable_id || optional($user->userable)->id != $employee->id)) {
        abort(403, 'Unauthorized access.');
    }

    if ($session_type == 'employee_assessment' && 
        (!$user->userable || !$user->userable->supervisedEmployees->contains($employee->id))) {
        abort(403, 'Unauthorized access.');
    }

    return true;
}

public function __construct()
{
    $this->middleware('auth'); // Ensures user is logged in
}


    private function checkEmployee($employee)   
    {
        $user = Auth::user();

        if ($user->userable->id != $employee) {
            abort(403);
        }

        return true;
    }

    private function checkCompetencyAssessment(Employee $employee, $id, $session_type)
{
    // ✅ Check if the Competency Assessment already exists
    $competencyAssessment = CompetencyAssessment::where("id", $id)
        ->where("employee_id", $employee->id)
        ->where("session_type", $session_type)
        ->first();

    // ✅ If NOT found, create a new competency assessment automatically
    if (!$competencyAssessment) {
        $competencyAssessment = CompetencyAssessment::create([
            'id' => $id, // Ensure this is unique
            'employee_id' => $employee->id,
            'session_type' => $session_type,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
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
        if($session_type == 'employee_assessment'){
            $competencyAssessment = CompetencyAssessment::where('id', $employee->competencyAssessments->first()->id)
            ->where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->first();
        } else{
            $competencyAssessment = CompetencyAssessment::where('id', $id)
            ->where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();
        }
    

        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);

        $positions = Position::all();
        $bureauOffices = BureauOffice::all();
        $competencies = Competency::all();
        $cdp = $competencyAssessment->careerDevelopmentPlan;

        if (!$cdp) {
            return view('competency_assessment.cdp.create', compact(
                'positions',
                'bureauOffices',
                'competencies',
                'employee',
                'session_type',
                'competencyAssessment',
                'competencyAssessmentItemsScored',
                'competencyAssessmentCompleted',
                'competencyAssessmentItemsExist',

            ));
        } else {

            return view('competency_assessment.cdp.edit', compact(
                'positions',
                'bureauOffices',
                'competencies',
                'employee',
                'session_type',
                'competencyAssessment',
                'competencyAssessmentItemsScored',
                'competencyAssessmentCompleted',
                'competencyAssessmentItemsExist',
                'cdp'
            ));
        }
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
                return 'Advanced';
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
        if ($averageRating >= 4) return "Superior";
        if ($averageRating >= 3) return "Advanced";
        if ($averageRating >= 2) return "Intermediate";
        if ($averageRating >= 1) return "Basic";
        return "No Proficiency";
    }

    public function summary(Employee $employee, $session_type, $id)
    {
        $this->authenticate($employee, $session_type);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessment = $employee->competencyAssessments->where("id", $id)->first();
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);

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
            $selfAssessmentScore = $item->score;
            $supervisorScore = null;

            if ($supervisorAssessmentItems) {
                $supervisorItem = $supervisorAssessmentItems->items->first(function ($supItem) use ($item) {
                    return $supItem->behavioral_indicator_id == $item->behavioral_indicator_id;
                });

                if ($supervisorItem) {
                    $supervisorScore = $supervisorItem->score;
                }
            }

            $finalRating = ($selfAssessmentScore * 0.5) + ($supervisorScore * 0.5);
            $levelText = $this->getLevelText($item->behavioralIndicator->level);
            $performanceObservation = $this->getPerformanceObservation($finalRating);
            $competencyStandard = CompetencySet::where('competency_id', $competency->id)
                ->first()->standard ?? null;

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

        foreach ($structuredItems as $categoryId => $category) {
            foreach ($category['competencies'] as $competencyId => $competency) {
                $levelRatings = [];
                $levelCounts = [];

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

                foreach ($levelRatings as $level => $sumRating) {
                    $averageRating = $levelCounts[$level] > 0 ? $sumRating / $levelCounts[$level] : 0;

                    $structuredItems[$categoryId]['competencies'][$competencyId]['levels'][$level]['average_rating'] = $averageRating;
                    $masteryLevel = $this->getMasteryLevel($averageRating);
                    $structuredItems[$categoryId]['competencies'][$competencyId]['levels'][$level]['mastery_level'] = $masteryLevel;
                }

                $totalRating = array_sum($levelRatings);
                $totalCount = array_sum($levelCounts);
                $overallAverage = $totalCount > 0 ? $totalRating / $totalCount : 0;
                $overallMasteryLevel = $this->getMasteryLevel($overallAverage);


                $structuredItems[$categoryId]['competencies'][$competencyId]['overall_average_rating'] = $overallAverage;
                $structuredItems[$categoryId]['competencies'][$competencyId]['overall_mastery_level'] = $overallMasteryLevel;

            }
        }

        // $totalAverageRating = 0;
        // $competencyCount = 0;
        // foreach ($structuredItems as $category) {
        //     foreach ($category['competencies'] as $competency) {
        //         $totalAverageRating += $competency['overall_average_rating']; 
        //         $competencyCount++;
        //     }
        // }
        // $overallAverageRating = $competencyCount > 0 ? $overallAverage / $competencyCount : 0;
        // $overallMasteryLevel = $this->getMasteryLevel($overallAverageRating);
        
        return view('competency_assessment.summary', compact('employee', 'session_type', 'structuredItems', 'overallAverage' , 'overallMasteryLevel', 'competencyAssessmentCompleted', 'competencyAssessment', 'competencyAssessmentItemsScored', 'competencyAssessmentItemsExist'));
    }
    public function export(Employee $employee, $session_type, $id)
    {
        
        $this->authenticate($employee, $session_type);
        $competencyAssessmentCompleted = $this->checkIfCompetencyAssessmentComplete($employee, $session_type);
        $competencyAssessment = $employee->competencyAssessments->where("id", $id)->first();
        $competencyAssessmentItemsScored = $this->checkIfCompetencyAssessmentItemScored($employee, $session_type);
        $competencyAssessmentItemsExist = $this->checkIfCompetencyAssessmentItemExists($employee, $session_type);

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
            $selfAssessmentScore = $item->score;
            $supervisorScore = null;

            if ($supervisorAssessmentItems) {
                $supervisorItem = $supervisorAssessmentItems->items->first(function ($supItem) use ($item) {
                    return $supItem->behavioral_indicator_id == $item->behavioral_indicator_id;
                });

                if ($supervisorItem) {
                    $supervisorScore = $supervisorItem->score;
                }
            }

            $finalRating = ($selfAssessmentScore * 0.5) + ($supervisorScore * 0.5);
            $levelText = $this->getLevelText($item->behavioralIndicator->level);
            $performanceObservation = $this->getPerformanceObservation($finalRating);
            $competencyStandard = CompetencySet::where('competency_id', $competency->id)
                ->first()->standard ?? null;

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

        foreach ($structuredItems as $categoryId => $category) {
            foreach ($category['competencies'] as $competencyId => $competency) {
                $levelRatings = [];
                $levelCounts = [];

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

                foreach ($levelRatings as $level => $sumRating) {
                    $averageRating = $levelCounts[$level] > 0 ? $sumRating / $levelCounts[$level] : 0;

                    $structuredItems[$categoryId]['competencies'][$competencyId]['levels'][$level]['average_rating'] = $averageRating;
                    $masteryLevel = $this->getMasteryLevel($averageRating);
                    $structuredItems[$categoryId]['competencies'][$competencyId]['levels'][$level]['mastery_level'] = $masteryLevel;
                }

                $totalRating = array_sum($levelRatings);
                $totalCount = array_sum($levelCounts);
                $overallAverage = $totalCount > 0 ? $totalRating / $totalCount : 0;
                $overallMasteryLevel = $this->getMasteryLevel($overallAverage);

               
                $structuredItems[$categoryId]['competencies'][$competencyId]['overall_average_rating'] = $overallAverage;
                $structuredItems[$categoryId]['competencies'][$competencyId]['overall_mastery_level'] = $overallMasteryLevel;
            }
        }

        // $totalAverageRating = 0;
        // $competencyCount = 0;
        // foreach ($structuredItems as $category) {
        //     foreach ($category['competencies'] as $competency) {
        //         $totalAverageRating += $competency['overall_average_rating'];
        //         $competencyCount++;
        //     }
        // }
        // $overallAverageRating = $competencyCount > 0 ? $totalAverageRating / $competencyCount : 0;
        // $overallMasteryLevel = $this->getMasteryLevel($overallAverageRating);
        PDF::setOption(['dpi' => 150, 'defaultFont' => 'Poppins']);
        $pdf = PDF::loadView('competency_assessment.summary_template',  compact('employee', 'session_type', 'structuredItems', 'overallAverage' , 'overallMasteryLevel', 'competencyAssessmentCompleted', 'competencyAssessment', 'competencyAssessmentItemsScored', 'competencyAssessmentItemsExist'))->setPaper('legal', 'landscape');
        return $pdf->download('summary_of_rating.pdf');
       

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
            'employee_firstname' => 'required|string',
            'employee_middlename' => 'nullable|string',
            'employee_lastname' => 'required|string',
            'employee_suffix' => 'nullable|string',
            'gender' => 'nullable |in:Male,Female,Other',
    
            'disability' => 'nullable|in:Yes,No',
            'indigenous' => 'nullable|in:Yes,No',
            'ip_group' => 'nullable|required_if:indigenous,Yes',
    
            'civil_status' => 'required|in:Single,Married,Widowed,Legally Separated',
            'religion' => 'required|string',
    
            'employment_status' => 'required|integer',
            'job_level' => 'required|integer',
            'functional_group' => 'nullable|integer',
            'bureau_office' => 'nullable|integer',
            'division' => 'nullable|integer',
            'position' => 'nullable|integer',
    
            'last_review_date' => 'required',
        ]);
    
        $employee->update([
            'firstname' => $validatedData['employee_firstname'],
            'middlename' => $validatedData['employee_middlename'],
            'lastname' => $validatedData['employee_lastname'],
            'suffix' => $validatedData['employee_suffix'],
            'gender' => $validatedData['gender'] ?? $employee->gender,
    
            'disability' => $validatedData['disability'],
            'indigenous' => $validatedData['indigenous'],
            'ip_group' => $validatedData['ip_group'] ?? null,
    
            'civil_status' => $validatedData['civil_status'],
            'religion' => $validatedData['religion'],
    
            'employment_status_id' => $validatedData['employment_status'],
            'job_level_id' => $validatedData['job_level'],
            'functional_group_id' => $validatedData['functional_group'] ?? null,
            'bureau_office_id' => $validatedData['bureau_office'] ?? null,
            'division_id' => $validatedData['division'] ?? null,
            'position_id' => $validatedData['position'] ?? null,
    
            'last_review_at' => $validatedData['last_review_date'],
        ]);
    
        $competencyAssessment = CompetencyAssessment::firstOrCreate([
            'employee_id' => $employee->id,
            'session_type' => $session_type,
            'status' => 'in_progress',
        ], [
            'current_page' => 'employee_profile',
            'date_started' => now(),
        ]);
    
        // Only seed items if not already present
        if (!CompetencyAssessmentItem::where('competency_assessment_id', $competencyAssessment->id)->exists()) {
            $competencySets = CompetencySet::where([
                'functional_group_id' => $employee->functional_group_id,
                'bureau_office_id' => $employee->bureau_office_id,
                'position_id' => $employee->position_id,
            ])->when($employee->division_id, function ($query) use ($employee) {
                return $query->where('division_id', $employee->division_id);
            })->get();
    
            foreach ($competencySets as $set) {
                foreach (BehavioralIndicator::where('competency_id', $set->competency_id)->get() as $indicator) {
                    CompetencyAssessmentItem::create([
                        'employee_id' => $employee->id,
                        'competency_assessment_id' => $competencyAssessment->id,
                        'behavioral_indicator_id' => $indicator->id,
                        'score' => null,
                        'assessment_type' => $session_type,
                    ]);
                }
            }
        }
    
        return redirect()->route('competency_assessment.employee_profile', [
            'employee' => $employee->id,
            'session_type' => $session_type,
        ])->with('status', 'Profile saved successfully.');
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

    public function storeCDP(Request $request, Employee $employee, $session_type, $id)
{
    $action = $request->input('action', 'submit');

    if ($session_type == 'employee_assessment') {
        $competencyAssessment = CompetencyAssessment::where('id', $employee->competencyAssessments->first()->id)
            ->where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->first();
    } else {
        $competencyAssessment = CompetencyAssessment::where('id', $id)
            ->where('employee_id', $employee->id)
            ->where('session_type', $session_type)
            ->first();
    }

    $validatedData = $request->validate([
        'interests' => 'nullable|string',
        'values' => 'nullable|string',
        'careerGoals' => 'nullable|string',
        'mobilityPreferences' => 'nullable|string',
        'mobilityConstraints' => 'nullable|string',
        'strengths' => 'nullable|string',
        'developmentGaps' => 'nullable|string',
        'careerRoadmapFocus' => 'nullable|string',
        'aspirations.shortTerm.position' => 'nullable|string',
        'aspirations.shortTerm.bureauOffice' => 'nullable|string',
        'aspirations.mediumTerm.position' => 'nullable|string',
        'aspirations.mediumTerm.bureauOffice' => 'nullable|string',
        'aspirations.longTerm.position' => 'nullable|string',
        'aspirations.longTerm.bureauOffice' => 'nullable|string',
        'developmentActivities.*.*.competency_id' => 'required|nullable|exists:competencies,id',
        'developmentActivities.*.*.action' => 'nullable|string',
        'developmentActivities.*.*.target_date' => 'nullable|string',
        'developmentActivities.*.*.by_whom' => 'nullable|string',
        'developmentActivities.*.*.status' => 'nullable|string',
        'developmentActivities.*.*.supervisor_notes' => 'nullable|string',
    ],[
        'developmentActivities.shortterm.1.competency_id.nullable' => 'Please select a competency for short term development activity :1',
        'developmentActivities.shortterm.2.competency_id.nullable' => 'Please select a competency for short term development activity :2',
        'developmentActivities.mediumterm.1.competency_id.nullable' => 'Please select a competency for medium term development activity :1',
        'developmentActivities.mediumterm.2.competency_id.nullable' => 'Please select a competency for medium term development activity :2',
        'developmentActivities.longterm.1.competency_id.nullable' => 'Please select a competency for long term development activity :1',
        'developmentActivities.longterm.2.competency_id.nullable' => 'Please select a competency for long term development activity :2'
    ]);

    $cdp = $competencyAssessment->careerDevelopmentPlan;

    if (!$cdp) {
        $competencyAssessmentId = $competencyAssessment->id;
        $cdp = new CareerDevelopmentPlan([
            'employee_id' => $employee->id,
            'competency_assessment_id' => $competencyAssessmentId
        ]);

        $cdp->save();
    }

    $cdpProperties = [
        'interests', 'values', 'careerGoals', 'mobilityPreferences',
        'mobilityConstraints', 'strengths', 'developmentGaps', 'careerRoadmapFocus'
    ];

    foreach ($validatedData as $key => $value) {
        if (in_array($key, $cdpProperties) && !empty($value)) {
            $cdp->cdpProperties()->updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }

    foreach (($validatedData['aspirations'] ?? []) as $term => $aspiration) {
        foreach ($aspiration as $key => $value) {
            if (!empty($value)) {
                $propertyKey = "{$term}_{$key}";
                $cdp->cdpProperties()->updateOrCreate(
                    ['key' => $propertyKey],
                    ['value' => $value]
                );
            }
        }
    }

    // ✅ Check if Supervisor Exists Before Assigning `supervisor_id`
    $supervisorId = null;
    if (auth()->user()->hasRole('supervisor')) {
        $supervisor = Employee::find(auth()->user()->id);
        if ($supervisor) {
            $supervisorId = $supervisor->id;
        }
    }

    $developmentActivities = $request->input('developmentActivities', []);

    foreach ($developmentActivities as $term => $activitiesByTerm) {
        foreach ($activitiesByTerm as $activityNumber => $activityDetails) {
            if (isset($activityDetails['competency_id']) && $activityDetails['competency_id'] !== 'Select Competency') {
                foreach (['experience', 'exposure', 'education'] as $activityType) {
                    if (array_key_exists($activityType, $activityDetails) && !empty($activityDetails[$activityType])) {
                        $activity = $activityDetails[$activityType];

                        if (!empty($activity['action']) || !empty($activity['measures']) || !empty($activity['by_whom']) || !empty($activity['supervisor_notes'])) {
                            $percentCriteria = match ($activityType) {
                                'experience' => '70',
                                'exposure' => '20',
                                'education' => '10',
                                default => null,
                            };

                            $findAttributes = [
                                'cdp_id' => $cdp->id,
                                'employee_id' => $employee->id,
                                'percent_criteria' => $percentCriteria,
                                'term' => "{$term}{$activityNumber}",
                            ];

                            $newValues = [
                                'competency_id' => $activityDetails['competency_id'],
                                'employee_id' => $employee->id,
                                'supervisor_id' => $supervisorId,  // ✅ Fix: Ensures supervisor exists
                                'percent_criteria' => $percentCriteria,
                                'term' => "{$term}{$activityNumber}",
                                'action' => $activity['action'] ?? null,
                                'target_date' => $activity['target_date'] ?? null,
                                'by_whom' => $activity['by_whom'] ?? null,
                                'status' => $activity['status'] ?? null,
                                'supervisor_notes' => $activity['supervisor_notes'] ?? null,
                            ];

                            DevelopmentActivity::updateOrCreate($findAttributes, $newValues);
                        }
                    }
                }
            }
        }
    }

    if ($action === 'save') {
        return back()->with('status', 'Successfully saved!');
    }

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

        $competencyAssessment = CompetencyAssessment::find($competencyAssessmentId);

        if ($competencyAssessmentItemsScored) {
            $competencyAssessment->update([
                'status' => 'completed',
                'date_completed' => now()
            ]);

            $otherSessionType = $session_type == 'self_assessment' ? 'employee_assessment' : 'self_assessment';
            $otherAssessment = CompetencyAssessment::where('employee_id', $employee->id)
                ->where('session_type', $otherSessionType)
                ->latest()
                ->first();

            if ($otherAssessment && $otherAssessment->status == 'completed') {
                $otherAssessment->update(['date_completed' => now()]);
            }
            
            $supervisors = $employee->supervisors;

      
            foreach ($supervisors as $supervisor) {
                $user = $supervisor->user; 
                if ($user) {
                    $user->notify(new CompetencyAssessmentCompletedNotification($employee->firstname, $employee->lastname));
                    
                }
            }


            $this->storeCompetencyAssessmentData('form', $request, $employee, $session_type);
        }

        if ($isLastCategory) {
            return redirect()->route('competency_assessment.summary', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessmentId]);
        } else {
            $nextCategoryId = $allCategoryIds[$currentIndex + 1];
            return redirect()->route('competency_assessment.form', ['employee' => $employee->id, 'session_type' => $session_type, 'id' => $competencyAssessmentId, 'categoryId' => $nextCategoryId]);
        }
    }


    public function employeeAssessment($employee, $session_type, Request $request)
    {

        $this->checkEmployee($employee);
        $supervisorId = auth()->user()->userable_id;
        $supervisor = Employee::find($supervisorId);
        $employee = $supervisor;

        $searchEmployee = $request->searchEmployee;
        $query = $supervisor->supervisedEmployees();

        if ($searchEmployee) {
            //$query = $query->where("firstname","like","%" . $searchEmployee . "%")->orWhere("lastname","like","%" . $searchEmployee . "%");
            $query = $query->where(function ($query) use ($searchEmployee) {
                $query->where("firstname", "like", "%" . $searchEmployee . "%")->orWhere("lastname", "like", "%" . $searchEmployee . "%");
            });
        }

        $supervisedEmployees = $query->paginate(10);

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
 
/**
 * ✅ Show the PDAP form with saved data
 */
public function pdap($employee, $session_type, $id, Request $request)
{
    Log::info("🟢 PDAP Route Accessed", [
        'employee_id' => $employee,
        'session_type' => $session_type,
        'competency_assessment_id' => $id
    ]);

    // ✅ Fetch Employee
    $employee = Employee::find($employee);
    if (!$employee) {
        Log::error("❌ Employee not found", ['employee_id' => $employee]);
        return back()->withErrors(['error' => "Employee not found."]);
    }

    // ✅ Fetch Competency Assessment
    $competencyAssessment = CompetencyAssessment::find($id);
    if (!$competencyAssessment) {
        Log::error("❌ Competency Assessment not found", ['competency_assessment_id' => $id]);
        return back()->withErrors(['error' => "Competency Assessment not found."]);
    }

    // ✅ Check if PDAP exists; if not, create it automatically
    $pdap = PDAP::firstOrCreate(
        ['competency_assessment_id' => $id], // Search by competency_assessment_id
        [ // Default values if it doesn't exist
            'priority_a' => null,
            'priority_b' => null,
            'priority_c' => null,
            'priority_d' => null,
            'skills_to_acquire' => null,
            'supervisor_notes' => null,
            'job_family_id' => null,
            'job_family_competency_id' => null
        ]
    );

    // ✅ Log the PDAP creation (or retrieval)
    Log::info("✅ PDAP record found or created", ['pdap_id' => $pdap->id]);

    // ✅ Check if the logged-in user is a Supervisor
    $authUser = Auth::user();
    $isSupervisor = $authUser->hasRole('supervisor');

    // ✅ If Supervisor is Viewing, Sync Employee's PDAP Data Immediately
    if ($session_type === 'employee_assessment' && $isSupervisor) {
        // ✅ Find the Employee's Self-Assessment PDAP
        $selfAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->first();

        if ($selfAssessment) {
            $employeePDAP = PDAP::where('competency_assessment_id', $selfAssessment->id)->first();

            if ($employeePDAP) {
                // ✅ Sync Employee's PDAP Data to Supervisor's PDAP
                $pdap->update([
                    'priority_a' => $employeePDAP->priority_a,
                    'priority_b' => $employeePDAP->priority_b,
                    'priority_c' => $employeePDAP->priority_c,
                    'priority_d' => $employeePDAP->priority_d,
                    'skills_to_acquire' => $employeePDAP->skills_to_acquire,

                    'job_family_id' => $employeePDAP->job_family_id,
                    'job_family_competency_id' => $employeePDAP->job_family_competency_id,
                    
                ]);                           
                Log::info("🔄 Supervisor's PDAP synced with Employee's PDAP (Competency Assessment ID: {$selfAssessment->id})");
            } else {
                Log::warning("⚠️ Employee's PDAP not found for Competency Assessment ID: {$selfAssessment->id}");
            }
        }
    }

    // ✅ Fetch Job Families & Competencies for dropdowns
    $jobFamilies = JobFamily::all();
    $competencies = JobFamilyCompetency::all();

    return view('competency_assessment.pdap', compact(
        'employee',
        'session_type',
        'competencyAssessment',
        'pdap',
        'jobFamilies',
        'competencies'
    ))->with('savedData', $pdap->toArray());
}



    /**
 * ✅ Store PDAP Data
 */
public function storePDAP(Request $request, $employee, $session_type, $id)
{
    $validated = $request->validate([
        'priority_a' => 'nullable|string',
        'priority_b' => 'nullable|string',
        'priority_c' => 'nullable|string',
        'priority_d' => 'nullable|string',
        'skills_to_acquire' => 'nullable|string',
        'supervisor_notes' => 'nullable|string',
        'job_family' => 'nullable|integer',
        'job_family_competency' => 'nullable|integer',
    ]);

    if (!CompetencyAssessment::where('id', $id)->exists()) {
        return redirect()->back()->with('error', 'Competency assessment not found.');
    }

    // ✅ Save current PDAP (employee or supervisor)
    $pdap = PDAP::updateOrCreate(
        ['competency_assessment_id' => $id],
        [
            'priority_a' => $validated['priority_a'] ?? null,
            'priority_b' => $validated['priority_b'] ?? null,
            'priority_c' => $validated['priority_c'] ?? null,
            'priority_d' => $validated['priority_d'] ?? null,
            'skills_to_acquire' => $validated['skills_to_acquire'] ?? null,
            'supervisor_notes' => $validated['supervisor_notes'] ?? null,
            'job_family_id' => $validated['job_family'] ?? null,
            'job_family_competency_id' => $validated['job_family_competency'] ?? null
        ]
    );

    Log::info('PDAP saved:', ['pdap' => $pdap->toArray()]);

    // ✅ Sync the opposite assessment entry
    $linkedSession = $session_type === 'self_assessment' ? 'employee_assessment' : 'self_assessment';

    $linkedAssessment = CompetencyAssessment::where('employee_id', $employee)
        ->where('session_type', $linkedSession)
        ->first();

    // ✅ Prevent overwriting if supervisor is saving
    if ($linkedAssessment && $session_type === 'self_assessment') {
        PDAP::updateOrCreate(
            ['competency_assessment_id' => $linkedAssessment->id],
            [
                'priority_a' => $pdap->priority_a,
                'priority_b' => $pdap->priority_b,
                'priority_c' => $pdap->priority_c,
                'priority_d' => $pdap->priority_d,
                'skills_to_acquire' => $pdap->skills_to_acquire,
                'supervisor_notes' => $pdap->supervisor_notes,
                'job_family_id' => $pdap->job_family_id,
                'job_family_competency_id' => $pdap->job_family_competency_id,
            ]
        );

        Log::info("🔁 Linked PDAP synced (from $session_type to $linkedSession, Competency Assessment ID: {$linkedAssessment->id})");
    }

    CompetencyAssessment::where('id', $id)->update(['current_page' => 'pdap']);

    if ($request->input('submit') === 'submit') {
        return redirect()->route('competency_assessment.pdap_extended', [
            'employee' => $employee,
            'session_type' => $session_type,
            'id' => $id
        ])->with('success', 'PDAP saved successfully. Proceeding to PDAP Page 2.');
    }

    return redirect()->route('competency_assessment.pdap', [
        'employee' => $employee,
        'session_type' => $session_type,
        'id' => $id
    ])->with('success', 'PDAP saved successfully!');
}

    
    
    public function getCompetencies(Request $request)
    {
        $jobFamilyId = $request->job_family_id;

        $competencies = JobFamilyCompetency::where('job_family_id', $jobFamilyId)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name
                ];
            });

        return response()->json(['competencies' => $competencies]);
    }

 /**
 * ✅ Show PDAP Extended Page (For Both Employee & Supervisor)
 */
public function pdapExtended($employee, $session_type, $id, Request $request)
{
    $authUser = Auth::user(); // ✅ Get logged-in user

    // ✅ Fetch employee object
    $employee = Employee::find($employee);
    if (!$employee) {
        return back()->withErrors(['error' => "Employee ID not found."]);
    }

    // ✅ Fetch competency assessment
    $competencyAssessment = CompetencyAssessment::find($id);
    if (!$competencyAssessment) {
        return back()->withErrors(['error' => "Competency assessment ID $id does not exist."]);
    }

    // ✅ Check if the user is a supervisor
    $isSupervisor = $authUser->hasRole('supervisor');

    // ✅ If supervisor is viewing, fetch employee's PDAP Extended data
    if ($session_type === 'employee_assessment' && $isSupervisor) {
        // ✅ Find the self-assessment competency assessment (employee's PDAP entry)
    // ✅ Get Employee’s Self-Assessment PDAP (Not Supervisor’s PDAP)
        $selfAssessment = CompetencyAssessment::where('employee_id', $employee->id)
        ->where('session_type', 'self_assessment')
        ->first();

$pdap = PDAP::where('competency_assessment_id', $selfAssessment->id)->first();


        if ($selfAssessment) {
            // ✅ Fetch Employee's PDAP Extended
            $pdap = PDAP::where('competency_assessment_id', $selfAssessment->id)->first();

            if ($pdap) {
                // ✅ If Supervisor's PDAP Extended does not exist, copy Employee's PDAP Extended
               // ✅ If Supervisor's PDAP does not exist, copy FULL PDAP (both normal & extended fields)
$supervisorPDAP = PDAP::updateOrCreate(
    ['competency_assessment_id' => $id], // Supervisor’s assessment ID
    [
        // ✅ Copy ALL PDAP fields
        'priority_a' => $pdap->priority_a,
        'priority_b' => $pdap->priority_b,
        'priority_c' => $pdap->priority_c,
        'priority_d' => $pdap->priority_d,
        'skills_to_acquire' => $pdap->skills_to_acquire,
        'job_family_id' => $pdap->job_family_id,
        'job_family_competency_id' => $pdap->job_family_competency_id,

        // ✅ Copy PDAP Extended fields
        'experience_action' => $pdap->experience_action,
        'experience_measures' => $pdap->experience_measures,
        'experience_by_whom' => $pdap->experience_by_whom,
        'experience_status' => $pdap->experience_status,
        'experience_supervisor_notes' => $pdap->experience_supervisor_notes,
        'exposure_action' => $pdap->exposure_action,
        'exposure_measures' => $pdap->exposure_measures,
        'exposure_by_whom' => $pdap->exposure_by_whom,
        'exposure_status' => $pdap->exposure_status,
        'exposure_supervisor_notes' => $pdap->exposure_supervisor_notes,
        'education_action' => $pdap->education_action,
        'education_measures' => $pdap->education_measures,
        'education_by_whom' => $pdap->education_by_whom,
        'education_status' => $pdap->education_status,
        'education_supervisor_notes' => $pdap->education_supervisor_notes,
    ]
);

// ✅ Log the full duplication for debugging
Log::info("🔄 Supervisor's PDAP fully duplicated from Employee's PDAP (Competency Assessment ID: {$selfAssessment->id})");


                Log::info("🔄 Supervisor's PDAP Extended copied from Employee's PDAP Extended for Competency Assessment ID: {$selfAssessment->id}");
                $pdap = $supervisorPDAP;
            } else {
                Log::warning("⚠️ Employee's PDAP Extended not found for Competency Assessment ID: {$selfAssessment->id}");
            }
        }
    } else {
        // ✅ If not a supervisor, just retrieve the PDAP normally
        $pdap = PDAP::where('competency_assessment_id', $id)->first();
    }

    // ✅ Log Error if No PDAP Extended is Found
    if (!$pdap) {
        Log::error("❌ PDAP Extended data not found for Competency Assessment ID: {$id}");
        return back()->withErrors(['error' => "PDAP Extended data not found."]);
    }

    return view('competency_assessment.pdap_extended', compact(
        'employee',
        'session_type',
        'competencyAssessment',
        'pdap'
    ))->with('savedData', $pdap);
}


/**
 * ✅ Store PDAP Extended Data
 */
public function storePDAPExtended(Request $request, $employee, $session_type, $id)
{
    Log::info('PDAP Extended Request Data:', $request->all());

    $validatedData = $request->validate([
        'developmentActivities.experience.action' => 'required|string',
        'developmentActivities.experience.measures' => 'required|string',
        'developmentActivities.experience.by_whom' => 'nullable|string',
        'developmentActivities.experience.status' => 'nullable|string',
        'developmentActivities.experience.supervisor_notes' => 'nullable|string',

        'developmentActivities.exposure.action' => 'required|string',
        'developmentActivities.exposure.measures' => 'required|string',
        'developmentActivities.exposure.by_whom' => 'nullable|string',
        'developmentActivities.exposure.status' => 'nullable|string',
        'developmentActivities.exposure.supervisor_notes' => 'nullable|string',

        'developmentActivities.education.action' => 'required|string',
        'developmentActivities.education.measures' => 'required|string',
        'developmentActivities.education.by_whom' => 'nullable|string',
        'developmentActivities.education.status' => 'nullable|string',
        'developmentActivities.education.supervisor_notes' => 'nullable|string',
    ]);

    if (!CompetencyAssessment::where('id', $id)->exists()) {
        return redirect()->back()->with('error', 'Competency assessment not found.');
    }

    // ✅ Determine if the request is from the Employee or Supervisor
    $isSupervisor = ($session_type === 'employee_assessment');

    // ✅ Find or Create PDAP Entry (For the One Updating - Either Employee or Supervisor)
    $pdap = PDAP::updateOrCreate(
        ['competency_assessment_id' => $id], 
        [
            'experience_action' => $validatedData['developmentActivities']['experience']['action'],
            'experience_measures' => $validatedData['developmentActivities']['experience']['measures'],
            'experience_by_whom' => $validatedData['developmentActivities']['experience']['by_whom'] ?? null,
            'experience_status' => $validatedData['developmentActivities']['experience']['status'] ?? null,
            'experience_supervisor_notes' => $validatedData['developmentActivities']['experience']['supervisor_notes'] ?? null,

            'exposure_action' => $validatedData['developmentActivities']['exposure']['action'],
            'exposure_measures' => $validatedData['developmentActivities']['exposure']['measures'],
            'exposure_by_whom' => $validatedData['developmentActivities']['exposure']['by_whom'] ?? null,
            'exposure_status' => $validatedData['developmentActivities']['exposure']['status'] ?? null,
            'exposure_supervisor_notes' => $validatedData['developmentActivities']['exposure']['supervisor_notes'] ?? null,

            'education_action' => $validatedData['developmentActivities']['education']['action'],
            'education_measures' => $validatedData['developmentActivities']['education']['measures'],
            'education_by_whom' => $validatedData['developmentActivities']['education']['by_whom'] ?? null,
            'education_status' => $validatedData['developmentActivities']['education']['status'] ?? null,
            'education_supervisor_notes' => $validatedData['developmentActivities']['education']['supervisor_notes'] ?? null,
        ]
    );

    Log::info('PDAP Extended saved:', ['pdap' => $pdap->toArray()]);

    // ✅ Find the Linked PDAP Entry (Either Supervisor’s or Employee’s)
    $linkedAssessment = CompetencyAssessment::where('employee_id', $employee)
        ->where('session_type', $isSupervisor ? 'self_assessment' : 'employee_assessment')
        ->first();

    if ($linkedAssessment) {
        // ✅ Update the corresponding PDAP entry (Ensure Both Views Are Always Updated)
        PDAP::updateOrCreate(
            ['competency_assessment_id' => $linkedAssessment->id],
            [
                'experience_action' => $pdap->experience_action,
                'experience_measures' => $pdap->experience_measures,
                'experience_by_whom' => $pdap->experience_by_whom,
                'experience_status' => $pdap->experience_status,
                'experience_supervisor_notes' => $pdap->experience_supervisor_notes,

                'exposure_action' => $pdap->exposure_action,
                'exposure_measures' => $pdap->exposure_measures,
                'exposure_by_whom' => $pdap->exposure_by_whom,
                'exposure_status' => $pdap->exposure_status,
                'exposure_supervisor_notes' => $pdap->exposure_supervisor_notes,

                'education_action' => $pdap->education_action,
                'education_measures' => $pdap->education_measures,
                'education_by_whom' => $pdap->education_by_whom,
                'education_status' => $pdap->education_status,
                'education_supervisor_notes' => $pdap->education_supervisor_notes,
            ]
        );

        Log::info("🔄 Linked PDAP Extended updated (Competency Assessment ID: {$linkedAssessment->id})");
    }

    if ($request->input('submit_action') === 'submit') {
        return redirect()->route('competency_assessment.cdp', [
            'employee' => $employee,
            'session_type' => $session_type,
            'id' => $id
        ])->with([
            'success' => 'PDAP Extended saved successfully! Proceeding to Career Development Plan.',
            'savedData' => $pdap
        ]);
    }
    
    // Otherwise, just save & stay on PDAP Extended
    return redirect()->route('competency_assessment.pdap_extended', compact('employee', 'session_type', 'id'))
        ->with('success', 'PDAP Extended saved successfully!');
    
}
}