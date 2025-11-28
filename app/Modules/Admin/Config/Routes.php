<?php

use Modules\Admin\Controllers\AdminHomeController;

$routes->group('admin', [
    'namespace' => 'Modules\Admin\Controllers',
    'filter'    => 'adminonly'
], function ($routes) {
    $routes->get('/', [AdminHomeController::class, 'index']);
    $routes->get('me', [AdminHomeController::class, 'getProfile']);
    $routes->get('users', [AdminHomeController::class, 'getUsers']);
    $routes->get('wallet', [AdminHomeController::class, 'getWallet']);
    $routes->get('properties', [AdminHomeController::class, 'getProperties']);
    $routes->get('new-property', [AdminHomeController::class, 'getNewProperty']);
    $routes->get('conversations', [AdminHomeController::class, 'getConversations']);
    $routes->get('notifications', [AdminHomeController::class, 'getNotifications']);
    $routes->post('new-properties', [AdminHomeController::class, 'setNewProperties']);
    $routes->get('properties/edit/(:num)', [AdminHomeController::class, 'getEditProperties/$1']);
    $routes->post('properties/edit/(:num)', [AdminHomeController::class, 'setEditProperties/$1']);
    $routes->delete('properties/edit/(:num)', [AdminHomeController::class, 'setDeleteProperties/$1']);
});

