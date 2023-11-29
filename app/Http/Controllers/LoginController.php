<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
class LoginController extends Controller
{

    public function show()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) :
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        if($user->hasRole('admin')){
            return redirect()->route('users.index');
        }

        if($user->userable_id == NULL){
            abort(403);
        }

        $employee = $user->userable;
        

        if($employee instanceof Employee){
           $competencyAssessment = $employee->last_competency_assessment;
          
           if(!$competencyAssessment){
             return redirect()->route('competency_assessment.about', ['employee' => $employee->id]);
           } else{
                switch ($competencyAssessment->current_page) {
                    case 'about':
                        return redirect()->route('competency_assessment.about', ['employee' => $employee]);
                    case 'dictionary':
                        return redirect()->route('competency_assessment.dictionary', ['employee' => $employee]);
                    case 'employee_profile':
                        return redirect()->route('competency_assessment.employee_profile', ['employee' => $employee, 'id' => $competencyAssessment->id]);
                    case 'rating_scale':
                        return redirect()->route('competency_assessment.rating_scale', ['employee' => $employee, 'id' => $competencyAssessment->id]);
                    case 'instructions':
                        return redirect()->route('competency_assessment.instructions', ['employee' => $employee, 'id' => $competencyAssessment->id]);
                    case 'form':
                        return redirect()->route('competency_assessment.form', ['employee' => $employee, 'id' => $competencyAssessment->id, 'categoryId' => 1]);
                    case 'summary':
                        return redirect()->route('competency_assessment.summary', ['employee' => $employee, 'id' => $competencyAssessment->id]);
                    case 'closing':
                        return redirect()->route('competency_assessment.closing', ['employee' => $employee, 'id' => $competencyAssessment->id]);
                    default:
                       
                }
           }
        }


       
    }
}
