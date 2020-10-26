<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseDashboardController;

class Controller extends BaseDashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->roles = 'Admin';
    }
}
