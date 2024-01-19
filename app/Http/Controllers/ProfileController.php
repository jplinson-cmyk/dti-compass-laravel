<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetencyCategory;
class ProfileController extends Controller
{
    public function index()
    {
        
        $user = auth()->user();
        $employee = $user->userable;
        $categories = CompetencyCategory::all();
        $competencyAssessmentExist = true;
        $competencyAssessmentItemsExist = true;
        $competencyAssessmentItemsScored = true;
        $competencyAssessmentCompleted = true;
        $session_type='self_assessment';
        return view('profile.index', compact(
            'employee',
            'categories',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored',
            'session_type'
        ));
    }
}
