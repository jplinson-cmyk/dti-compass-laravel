<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompetencyAssessmentController extends Controller
{
    
    public function about()
    {
        return view('competency_assessment.about');
    }

    public function instructions()
    {
        return view('competency_assessment.instructions');
    }
}
