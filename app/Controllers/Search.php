<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Search extends BaseController
{
    public function index()
    {
        echo '<pre>';
        var_dump($this->request->getGet('s'));
        echo '</pre>';exit;
        
    }
}
