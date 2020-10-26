<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseDashboardController;

class Controller extends BaseDashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->roles = 'User';
    }
}
