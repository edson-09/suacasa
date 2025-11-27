<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ========================================================================================================
// ROTAS DO SITE
// ========================================================================================================
$routes->group('', ['namespace' => 'Modules\Site\Controllers'], function ($routes) {
    require APPPATH . 'Modules/Site/Config/Routes.php';
});

// ========================================================================================================
// ROTAS DO PAINEL
// ========================================================================================================
$routes->group('', ['namespace' => 'Modules\Admin\Controllers'], function ($routes) {
    require APPPATH . 'Modules/Admin/Config/Routes.php';
});
