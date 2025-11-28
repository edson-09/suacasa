<?php

namespace Modules\Auth\Controllers;

use App\Controllers\BaseController;
use Modules\Auth\Services\UserApiService;

class AuthController extends BaseController
{
    protected UserApiService $authService;

    public function __construct()
    {
        $this->authService = new UserApiService();
    }

    /**
     * Tela de login
     */
    public function login()
    {
        // Se já está logado, manda para o dashboard correspondente
        if ($this->authService->isLoggedIn()) {
            return $this->redirectByRole();
        }

        return view('Auth\Views\pages\login');
    }

    /**
     * Processa login via POST
     */
    public function attemptLogin()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Verifica campos obrigatórios
        if (!$email || !$password) {
            return redirect()->back()->withInput()->with('error', 'Preencha todos os campos.');
        }
        
        // Tenta autenticar na API externa
        $result = $this->authService->login($email, $password);

        if (!$result) {
            return redirect()->back()->withInput()->with('error', 'Credenciais inválidas.');
        }

        // Redireciona com base no tipo de usuário
        return $this->redirectByRole();
    }

    /**
     * Tela de registo
     */
    public function register()
    {
        // Se já está logado, manda para o dashboard correspondente
        if ($this->authService->isLoggedIn()) {
            return $this->redirectByRole();
        }

        return view('Auth\Views\pages\login');
    }

    /**
     * Processa registo via POST
     */
    public function attemptRegister()
    {
        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Verifica campos obrigatórios
        if (!$email || !$password) {
            return redirect()->back()->withInput()->with('error', 'Preencha todos os campos.');
        }

        // Tenta autenticar na API externa
        $result = $this->authService->login($email, $password);

        if (!$result) {
            return redirect()->back()->withInput()->with('error', 'Credenciais inválidas.');
        }

        // Redireciona com base no tipo de usuário
        return $this->redirectByRole();
    }

    /**
     * Encerra sessão
     */
    public function logout()
    {
        $this->authService->logout();
        return redirect()->to('/login')->with('success', 'Sessão encerrada.');
    }

    /**
     * Redireciona o usuário logado para o lugar certo baseado no role
     */
    private function redirectByRole()
    {
        $role = (int) session('user.role_id');

        return match ($role) {
            1 => redirect()->to('/admin'),
            2 => redirect()->to('/agent'),
            3 => redirect()->to('/client/dashboard'),
            default => redirect()->to('/login'),
        };
    }
}
