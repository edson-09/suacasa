<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Modules\Auth\Services\UserApiService;

class AuthFilters implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = new UserApiService();

        if (! $auth->isLoggedIn()) {
            return redirect()->to('/login')->with('error', 'Você precisa fazer login.');
        }

        // Se passar, deixa continuar
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Não precisamos de nada aqui
    }
}
