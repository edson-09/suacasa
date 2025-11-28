<?php

use Modules\Auth\Controllers\AuthController;

$routes->group('', ['namespace' => 'Modules\Auth\Controllers'], function ($routes) {
    $routes->get('login', [AuthController::class, 'login']);
    $routes->get('register', [AuthController::class, 'register']);
    $routes->post('auth/login', [AuthController::class, 'attemptLogin']);
    $routes->get('logout', [AuthController::class, 'logout']);
});
