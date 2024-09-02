<?php

namespace App\Http\Controllers\Backend\System;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use Authenticatable;

    protected function guard()
    {
        return auth()->guard('admin');
    }

    public function showLoginForm()
    {
        return view('backend.system.auth.login');
    }

    public function login(Request $request)
    {
        if ($this->guard()->attempt($request->only(['email', 'password']), $request->remember_me)) {
            $user = auth()->guard('admin')->user();
            return redirect()->route('backend.dashboard');
        } else {
            activity()
                ->withProperties(['email' => $request->email])
                ->log('Failed login attempt');
            return back();
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return back();
    }

    protected function authenticated(Request $request, $user)
    {
        return response()->json([
            'token' => $user->createToken('API Token')->accessToken,
        ]);
    }
}
