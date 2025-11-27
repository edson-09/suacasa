<?php

namespace Modules\Site\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('Site\Views\pages\home',['title' => 'Home | Sua Casa']);
    }
}
