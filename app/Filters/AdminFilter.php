<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // não está logado? manda pro login
        if (! session()->has('auth_token')) {
            return redirect()->to('/login');
        }

        // está logado mas não é admin?
        if ((session('user.role_id') ?? null) != 1) {
            return redirect()->to('/login');
        }

        // se passou daqui, deixa seguir pro controller
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
