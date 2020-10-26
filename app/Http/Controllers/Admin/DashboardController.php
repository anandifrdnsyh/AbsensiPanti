<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $count = [
            'user' => User::where('role_id', 2)->count(),
        ];

        $this->pageTitle = 'Dashboard';

        return view('Admin.Dashboard', $this->withDashboardData([
            'count' => $count
        ]));
    }
}
