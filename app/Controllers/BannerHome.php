<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\View;

class BannerHome extends BaseController
{
    public function index()
    {
        // sleep(5);
        return view('_partials/_bannerHome');
    }
}
