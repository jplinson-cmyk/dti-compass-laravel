<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Competency;
use App\Models\CompetencyCategory;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    // public function index() 
    // {
    //     // $employee = Employee::find(1);
    //     // // dd($employee->competencyAssessments);
    //     // $collection = $employee->current_competency_assessment->items->map(function ($array) {
    //     //     return collect($array)->unique('level')->all();
    //     // });
    //     // dd( $collection);
  
        
    //     return view('home.index');
    // }
    public function index(){


        $categories = CompetencyCategory::all();
        $user = auth()->user();

        $employee = $user->userable;

        if($user->hasAnyRole(['super_admin', 'admin'])){
            return redirect()->route('users.index');
        }else {
            return redirect()->route('competency_assessment.about', ['employee' => $employee, 'session_type' => 'self_assessment']);
        }
   
        }
}