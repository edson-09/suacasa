<?php

use Modules\Admin\Controllers\AdminHomeController;

$routes->group('admin', ['namespace' => 'Modules\Admin\Controllers'], function ($routes) {
    $routes->get('painel/inicio', [AdminHomeController::class, 'index']);
});
