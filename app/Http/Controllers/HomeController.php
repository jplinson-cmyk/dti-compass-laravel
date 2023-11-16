<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index() 
    {
        // $employee = Employee::find(1);
        // // dd($employee->competencyAssessments);
        // $collection = $employee->current_competency_assessment->items->map(function ($array) {
        //     return collect($array)->unique('level')->all();
        // });
        // dd( $collection);

        return view('home.index');
    }
}