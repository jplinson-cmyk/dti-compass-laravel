<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index() 
    {

/*        $user = User::find(9);

        $user->password = "password";
        $user->save();
        $employee = $user->userable;

        if($employee instanceof Employee){
            dd("is employee",$employee);
        }
        else{
            dd(get_class($employee));
            dd("not an employee");
        }
        */
        return view('home.index');
    }
}