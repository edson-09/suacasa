<?php

use Modules\Site\Controllers\HomeController;
use Modules\Site\Controllers\PropertyController;

$routes->get('/', [HomeController::class, 'index']);
$routes->get('destacados', [PropertyController::class, 'getDestacados']);
$routes->get('resultados', [PropertyController::class, 'getProperties']);
$routes->get('imoveis-destacados', [PropertyController::class, 'getHighlightProperty']);
$routes->get('imoveis-destacados/(:segment)', [PropertyController::class, 'getPropertyBySlug/$1']);
$routes->get('imoveis-destacados/(:segment)/imagens', [PropertyController::class, 'getPropertyBySlug/$1']);