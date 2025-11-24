<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\PropertyController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('destacados', [PropertyController::class, 'getDestacados']);
$routes->get('resultados', [PropertyController::class, 'getProperties']);
$routes->get('imoveis-destacados', [PropertyController::class, 'getHighlightProperty']);
$routes->get('imoveis-destacados/(:segment)', [PropertyController::class, 'getPropertyBySlug/$1']);
