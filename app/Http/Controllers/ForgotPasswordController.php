<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\password_resets;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    // Show Forgot Password Form
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    // Forgot Password Submit
    public function forgotPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Email is required!',
            'email.email' => 'Enter a valid email!',
            'email.exists' => 'This email is not registered!',
        ]);


        $token = Str::random(64);

        password_resets::where('email', $request->email)->delete();

        password_resets::create([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Send Mail
        Mail::to($request->email)->send(new ResetPasswordMail($token));

        return back()->with('success', 'Reset password link has been sent to your email!');
    }

    // Show Reset Password Form
    public function resetPassword($token)
    {
        return view('auth.reset-password', compact('token'));
    }


    // Reset Password Submit
    public function resetPasswordPost(Request $request)
{
    // Step 1: Validate form input
    $request->validate([
        'email' => 'required|email|exists:users,email',
        'password' => 'required|min:6|confirmed',
        'token' => 'required',
    ], [
        'email.required' => 'Email is required!',
        'email.email' => 'Enter a valid email!',
        'email.exists' => 'This email is not registered!',
        'password.required' => 'Password is required!',
        'password.min' => 'Password must be at least 6 characters!',
        'password.confirmed' => 'Password confirmation does not match!',
        'token.required' => 'Token missing!',
    ]);

    // Step 2: Check if token is valid
    $checkToken = password_resets::where('email', $request->email)
        ->where('email', $request->email)
        ->where('token', $request->token)
        ->first();

    if (!$checkToken) {
        return back()
            ->with('error', 'Invalid or expired token!')
            ->withInput(); // keep old email input
    }

    // Step 3: Update user's password
    User::where('email', $request->email)->update([
        'password' => Hash::make($request->password)
    ]);

    // Step 4: Delete used token
    password_resets::where('email', $request->email)->delete();

    // Step 5: Redirect with success message
    return redirect()->route('login')
        ->with('success', 'Password reset successfully!');
}

}
