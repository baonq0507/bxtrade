<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function loginPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email or Username is required',
            'password.required' => 'Password is required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        $user = User::where('email', $request->email)->orWhere('username', $request->email)->first();
        if (!$user) {
            return response()->json(['error' => 'Email or Username is invalid'], 422);
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Password is invalid'], 422);
        }

        Auth::login($user);
        return response()->json(['success' => 'Login successfully'], 200);
    }

    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'invite_code' => 'nullable|exists:users,invite_code',
            'username' => 'required|unique:users,username',
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email already exists',
            'password.required' => 'Password is required',
            'password_confirmation.required' => 'Password confirmation is required',
            'password_confirmation.same' => 'Password confirmation must match password',
            'invite_code.exists' => 'Invite code is invalid',
            'username.required' => 'Username is required',
            'username.unique' => 'Username already exists',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first()], 422);
        }

        $invite_code = null;
        if ($request->invite_code) {
            $invite_code = User::where('invite_code', $request->invite_code)->first();
            if (!$invite_code) {
                return response()->json(['error' => 'Invite code is invalid'], 422);
            }
    
            if ($invite_code->status_account == 'inactive' || $invite_code->status_account == 'blocked') {
                return response()->json(['error' => 'Invite code is inactive or blocked'], 422);
            }
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'invite_code' => $request->invite_code,
            'invite_by' => $invite_code->id ?? null,
        ]);

        return response()->json(['success' => 'Register successfully'], 200);
    }

    public function profile()
    {
        return view('auth.profile');
    }
}
