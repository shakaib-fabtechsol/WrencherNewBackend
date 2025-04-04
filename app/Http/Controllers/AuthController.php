<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;
use App\Models\User;

class AuthController extends Controller
{
    public function Login()
    {
        return view('Auth.Login');
    }

    public function ProcessLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 400);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return response()->json([
                    'errors' => 'Invalid credentials'
                ], 400);
            }
            return redirect()->route('Login')->with('error', 'Email or password is incorrect');
        }
        if ($user->status == 1) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return response()->json([
                    'errors' => 'Your account has been banned'
                ], 403);
            }
            return redirect()->route('Login')->with('error', 'Your account has been banned');
        }
        $token = $user->createToken('auth_token')->plainTextToken;
        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'User successfully logged in!',
                'user' => $user,
                'token' => $token
            ], 200);
        }
        Session::put('user', $user);
        switch ($user->role) {
            case 0:
                return redirect()->route('Admin.Dashboard')->with('success', 'You have been logged in successfully');
            case 1:
                return redirect()->route('BusinessUser.Dashboard')->with('success', 'You have been logged in successfully');
            case 2:
                return redirect()->route('Client.Dashboard')->with('success', 'You have been logged in successfully');
            default:
                return redirect()->route('Home')->with('success', 'You have been logged in successfully');
        }
    }
    public function Signup()
    {
        return view('Auth.Signup');
    }

    public function ProcessSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            if ($request->wantsJson() || $request->is('api/*')) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 400);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->all();
        $data['role'] = 1;
        $user = User::create($data);
        $token = $user->createToken('auth_token')->plainTextToken;
    
        if ($request->wantsJson() || $request->is('api/*')) {
            return response()->json([
                'message' => 'User successfully registered!',
                'user' => $user,
                'token' => $token
            ], 200);
        }
        Session::put('user', $user);
        switch ($user->role) {
            case 0:
                return redirect()->route('Admin.Dashboard')->with('success', 'You have been logged in successfully');
            case 1:
                return redirect()->route('BusinessUser.Dashboard')->with('success', 'You have been logged in successfully');
            case 2:
                return redirect()->route('Client.Dashboard')->with('success', 'You have been logged in successfully');
            default:
                return redirect()->route('Home')->with('success', 'You have been logged in successfully');
        }
    }
 
    public function ForgetPassword()
    {
        return view('Auth.ForgetPassword');
    }

    public function ResetPasswordEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
        ]);
        if ($validator->fails()) {
            if ($request->wantsJson()) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 400);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $token = Password::createToken(User::where('email', $request->email)->first());
        User::where('email','=',$request->email)->update(['token' => $token]);
        if (!$token) {
            if ($request->wantsJson()) {
            return response()->json(['error' => 'Unable to generate password reset token. Please try again later.'], 400);
            }
        }
        Mail::to($request->email)->send(new ResetPasswordMail($token));
        if ($request->wantsJson()) {
            return response()->json(['message' => 'Password reset link has been sent to your email.'], 200);
        }
        return redirect()->back()->with('success', 'Password reset link has been sent to your email.');
    }

    public function ChangePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ]);
        if ($validator->fails()) {
            if ($request->wantsJson()) {
                return response()->json([
                    'errors' => $validator->errors()
                ], 400);
            }
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $GetUserDetails = User::where('token', $request->token)->first();
        if ($GetUserDetails == null) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error' => 'Invalid token'
                ], 400);
            }
            return redirect()->back()->with('error', 'Invalid token');
        }
        $GetUserDetails->update(['password' => Hash::make($request->new_password),'token' => null]);
        
        if ($request->wantsJson()) {
            return response()->json(['message' => 'Your password has been reset successfully.'], 200);
        }
        return redirect()->route('Login')->with('success', 'Your password has been reset successfully.');
    }

    public function NewPassword(Request $request)
    {
        $token = $request->query('token');
        $user = User::where('token', $token)->first();
        if (!$user) {
            abort(419, 'Page Expired');
        }
        return view('Auth.NewPassword', compact('token'));
    }

    public function Logout()
    {
        Session::forget('user'); 
        return redirect()->route('Home');
    }

    public function Terms()
    {
        return view('Auth.Terms');
    }
}