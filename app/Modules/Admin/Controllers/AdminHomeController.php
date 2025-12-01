<?php

namespace Modules\Admin\Controllers;

use App\Controllers\BaseController;
use Modules\Auth\Services\UserApiService;
use Modules\Properties\Services\PropertyApiService;

class AdminHomeController extends BaseController
{
    private UserApiService $auth;
    protected PropertyApiService $service;

    public function __construct()
    {
        $this->auth = new UserApiService();
        $this->service = new PropertyApiService();
    }

    public function index()
    {
        $results = $this->service->countByType();
        $activeProperties = $this->service->search(['status' => 'published'])['total'];

        return view('Admin\Views\pages\home', [
            'active_properties' => $activeProperties,
            'apartamento'       => $results['apartamento'] ?? 0,
            'moradia'           => $results['moradia'] ?? 0,
            'terreno'           => $results['terreno'] ?? 0,
            'comercial'         => $results['comercial'] ?? 0,
            'quarto'            => $results['quarto'] ?? 0,
            'garagem'           => $results['garagem'] ?? 0,
            'armazem'           => $results['armazem'] ?? 0,
            'escritorio'        => $results['escritorio'] ?? 0,
            'outro'             => $results['outro'] ?? 0,
        ]);
    }

    public function getProperties()
    {
        $total = $this->service->search()['total'];
        $pendentes = $this->service->search(['status' => 'pending'])['total'];

        return view('Admin\Views\pages\properties', [
            'total' => $total,
            'pendentes' => $pendentes,
        ]);
    }

    public function getNewProperty()
    {
        // if (! $this->auth->isLoggedIn()) {
        //     return redirect()->to('painel/login')->with('error', 'Sessão expirada.');
        // }

        // $user = $this->auth->getCurrentUser();

        return view('Admin\Views\pages\new_property');
    }

    public function getProfile()
    {
        return view('Admin\Views\pages\profile');
    }

    public function getUsers()
    {
        return view('Admin\Views\pages\users');
    }

    public function getWallet()
    {
        return view('Admin\Views\pages\wallet');
    }

    public function getConversations()
    {
        return view('Admin\Views\pages\conversations');
    }

    public function getNotifications()
    {
        return view('Admin\Views\pages\notifications');
    }
}
