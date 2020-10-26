<?php

namespace App\Http\Controllers;

class BaseDashboardController extends Controller
{
    protected $jenisUser = '';
    protected $dashboardMenu = [];

    public function __construct()
    {
        $this->pageTitle = 'Dashboard';
    }

    protected function withDashboardData(array $array = [])
    {
        return array_merge($array, [
            'pageTitle' => $this->pageTitle,
            'roles' => $this->roles,
            'dashboardMenu' => $this->dashboardMenu,
        ]);
    }
}
