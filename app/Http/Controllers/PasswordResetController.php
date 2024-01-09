<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordResetController extends Controller
{
    public function requestPassword()
    {
        return view('auth.forgot_password');
    }

    public function emailPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('login.show')->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }


    public function resetPassword($token)
    {
        return view('auth.reset_password', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        // Custom password validation rule
        $passwordValidation = [
            'required',
            'confirmed',
            'min:8', // minimum 8 characters
            'regex:/[a-z]/', // at least one lowercase letter
            'regex:/[A-Z]/', // at least one uppercase letter
            'regex:/[0-9]/', // at least one number
            'regex:/[!@#$%&]/' // at least one special character (! @ # $ % &)
        ];

        $customMessages = [
            'password.regex' => 'The password format is invalid. It must contain at least 8 characters, including 1 number, 1 lowercase letter, 1 uppercase letter, and 1 special character (! @ # $ % &).',
        ];

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => $passwordValidation,
        ], $customMessages);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, $password) {
                $user->forceFill([
                    'password' => $password, 
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login.show')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
