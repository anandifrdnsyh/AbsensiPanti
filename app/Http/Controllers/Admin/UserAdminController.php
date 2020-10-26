<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

class UserAdminController extends Controller
{
    public function index()
    {
        $admin = User::where('role_id', 1)->get();
        $i=1;
        $this->pageTitle = 'User Admin';
        return view('Admin.Users.Admin', $this->withDashboardData([
            'dataAdmin' => $admin,
            'i' => $i
        ]));
    }
}
