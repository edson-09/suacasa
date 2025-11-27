<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;

class AdminHomeController extends BaseController
{
    public function index()
    {
        return view('Admin\s')
    }
}