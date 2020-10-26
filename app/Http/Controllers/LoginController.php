<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Logout;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use  App\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 1])) {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role_id' => 2])) {
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->back()->withInput($request->only('username'))->withErrors("Email / Password Salah");
        }
    }

}
