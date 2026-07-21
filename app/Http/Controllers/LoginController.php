<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;
use App\Models\CompetencyAssessment;
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
            $competencyAssessment = CompetencyAssessment::where('employee_id', $employee->id)
            ->where('session_type', 'self_assessment')
            ->first();
           if(!$competencyAssessment){
             return redirect()->route('competency_assessment.about', ['employee' => $employee, 'session_type' => 'self_assessment']);
           } else{
                switch ($competencyAssessment->current_page) {
                    case 'about':
                        return redirect()->route('competency_assessment.about', ['employee' => $employee, 'session_type' => 'self_assessment']);
                    case 'dictionary':
                        return redirect()->route('competency_assessment.dictionary', ['employee' => $employee, 'session_type' => 'self_assessment']);
                    case 'employee_profile':
                        return redirect()->route('competency_assessment.employee_profile', ['employee' => $employee, 'session_type' => 'self_assessment', 'id' => $competencyAssessment->id]);
                    case 'rating_scale':
                        return redirect()->route('competency_assessment.rating_scale', ['employee' => $employee, 'session_type' => 'self_assessment', 'id' => $competencyAssessment->id]);
                    case 'instructions':
                        return redirect()->route('competency_assessment.instructions', ['employee' => $employee, 'session_type' => 'self_assessment', 'id' => $competencyAssessment->id]);
                    case 'form':
                        return redirect()->route('competency_assessment.form', ['employee' => $employee, 'session_type' => 'self_assessment', 'id' => $competencyAssessment->id, 'categoryId' => 1]);
                    case 'summary':
                        return redirect()->route('competency_assessment.summary', ['employee' => $employee, 'session_type' => 'self_assessment', 'id' => $competencyAssessment->id]);
                    case 'cdp':
                            return redirect()->route('competency_assessment.cdp', ['employee' => $employee, 'session_type' => 'self_assessment', 'id' => $competencyAssessment->id]);
                    case 'closing':
                        return redirect()->route('competency_assessment.cdp', ['employee' => $employee, 'session_type' => 'self_assessment', 'id' => $competencyAssessment->id]);
                    default:
                        return redirect()->route('competency_assessment.about', ['employee' => $employee, 'session_type' => 'self_assessment']);
                }
           }
        }


       
    }
}
