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

    protected function determineLayout(User $user)
    {
        $layout = 'layouts.compass';

        if ($user->hasRole('admin')) {
            $layout = 'layouts.app-master';
        } elseif ($user->hasRole('employee')) {
            $layout = 'layouts.compass';
        }

        return $layout;
    }

    public function index(User $user)
    {
        $this->checkAuthorization($user);
        $layout = $this->determineLayout($user);
        $employee = $user->userable;
        $categories = CompetencyCategory::all();
        $competencyAssessmentExist = true;
        $competencyAssessmentItemsExist = true;
        $competencyAssessmentItemsScored = false;
        $competencyAssessmentCompleted = false;
        $currentCompetencyAssessment = false;

        $session_type = 'self_assessment';
        return view('profile.index', compact(
            'user',
            'employee',
            'categories',
            'currentCompetencyAssessment',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored',
            'session_type',
            'layout'
        ));
    }

    public function edit(User $user)
    {
        $this->checkAuthorization($user);
        $layout = $this->determineLayout($user);
        $employee = $user->userable;
        $categories = CompetencyCategory::all();
        $competencyAssessmentExist = true;
        $competencyAssessmentItemsExist = true;
        $competencyAssessmentItemsScored = true;
        $competencyAssessmentCompleted = false;
        $currentCompetencyAssessment = true;
        $session_type = 'self_assessment';
        return view('profile.edit', compact(
            'user',
            'employee',
            'categories',
            'currentCompetencyAssessment',
            'competencyAssessmentExist',
            'competencyAssessmentItemsExist',
            'competencyAssessmentCompleted',
            'competencyAssessmentItemsScored',
            'session_type',
            'layout'
        ));
    }

    public function update(Request $request, User $user)
    {
        $this->checkAuthorization($user);

        // $passwordValidation = [
        //     'nullable',
        //     'confirmed',
        //     'min:8', // minimum 8 characters
        //     'regex:/[a-z]/', // at least one lowercase letter
        //     'regex:/[A-Z]/', // at least one uppercase letter
        //     'regex:/[0-9]/', // at least one number
        //     'regex:/[!@#$%&]/' // at least one special character (! @ # $ % &)
        // ];

        // $customMessages = [
        //     'password.regex' => 'The password format is invalid. It must contain at least 8 characters, including 1 number, 1 lowercase letter, 1 uppercase letter, and 1 special character (! @ # $ % &).',
        // ];

        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           
        ]);

        // $request->validate([
        //     'firstname' => 'required|string|max:255',
        //     'lastname' => 'required|string|max:255',
        //     'middlename' => 'nullable|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        //     'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //      'password' => $passwordValidation,
        // ], $customMessages);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->middlename = $request->middlename;
        // $user->password = $request->password;

        if ($request->hasFile('profile_pic')) {
            if ($user->profile_pic && Storage::exists('public/images/' . $user->profile_pic)) {
                Storage::delete('public/images/' . $user->profile_pic);
            }

            $imageName = time() . '.' . $request->profile_pic->extension();
            $request->profile_pic->storeAs('public/images', $imageName);
            $user->profile_pic = $imageName;
        }

        // if (!empty($request->password)) {
        //     $user->password = $request->password;
        // }

        $user->save();

        return redirect()->route('profile.index', $user)->with('status', 'Profile updated successfully!');
    }
}
