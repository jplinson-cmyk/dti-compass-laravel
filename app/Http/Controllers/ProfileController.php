<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompetencyCategory;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    protected function checkAuthorization(User $user)
    {
        if (auth()->id() !== $user->id) {
            abort(403, 'Unauthorized User.');
        }
    }

    public function index(User $user)
    {
        $this->checkAuthorization($user);
        $employee = $user->userable;
        $categories = CompetencyCategory::all();
        $competencyAssessmentExist = true;
        $competencyAssessmentItemsExist = true;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;
        $currentCompetencyAssessment=false;

        $session_type='self_assessment';
        return view('profile.index', compact(
            'user',
            'employee',
            'categories',
            'currentCompetencyAssessment',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored',
            'session_type'
        ));
    }

    public function edit(User $user){
        $this->checkAuthorization($user);
        $employee = $user->userable;
        $categories = CompetencyCategory::all();
        $competencyAssessmentExist = true;
        $competencyAssessmentItemsExist = true;
        $competencyAssessmentItemsScored = true;
        $competencyAssessmentCompleted = false;
        $currentCompetencyAssessment=true;
        $session_type='self_assessment';
        return view('profile.edit', compact(
            'user',
            'employee',
            'categories',
            'currentCompetencyAssessment',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored',
            'session_type'
        ));

    }

    public function update(Request $request, User $user)
    {
        $this->checkAuthorization($user);
    
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
    
        if ($request->hasFile('profile_pic')) {
            if ($user->profile_pic && Storage::exists('profilepics/' . $user->profile_pic)) {
                Storage::delete('profilepics/' . $user->profile_pic);
            }
    
            $imageName = time().'.'.$request->profile_pic->extension();  
            $request->profile_pic->storeAs('profilepics', $imageName, 'public');
            $user->profile_pic = $imageName;
        }
    
        $user->save();
    
        return redirect()->route('profile.index', $user)->with('success', 'Profile updated!');
    }
    

}
