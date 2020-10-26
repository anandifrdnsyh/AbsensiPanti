<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cekLogin()
    {
        if (Auth::user()->role_id == 1) {
            return view('admin.dashboard');
        }elseif(Auth::user()->role_id == 2)
        {
            return view('user.dashboard');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }


}
