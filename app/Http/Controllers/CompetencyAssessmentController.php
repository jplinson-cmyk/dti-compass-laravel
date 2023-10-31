<?php

namespace App\Http\Controllers;

use App\Models\BehavioralIndicator;
use App\Models\Competency;
use App\Models\CompetencyCategory;
use Illuminate\Http\Request;

class CompetencyAssessmentController extends Controller
{

    public function about()
    {
        return view('competency_assessment.about');
    }

    
    public function dictionary()
    { 
        $competencyCategories = CompetencyCategory::all();
        $competencies = Competency::all();
       
        return view('competency_assessment.dictionary',compact('competencyCategories', 'competencies'));
    }

    public function ratingScale()
    {
        return view('competency_assessment.rating_scale');
    }

    public function instructions()
    {
        return view('competency_assessment.instructions');
    }

    public function getEmployeeProfileDetails()
    {
        return view('competency_assessment.employee_profile');
    }

    public function getCompetencies($categoryId)
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


    public function coreCompetencies()
    {
        $data = $this->getCompetencies(2); // Core Competency category ID is 2
        return view('competency_assessment.core_competency', $data);
    }

    public function technicalCompetencies()
    {
        $data = $this->getCompetencies(1); // Technical Competency category ID is 1
        return view('competency_assessment.technical_competency', $data);
    }

    public function leadershipCompetencies()
    {
        $data = $this->getCompetencies(3); // Leadership Competency category ID is 3
        return view('competency_assessment.leadership_competency', $data);
    }
}
