<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'login::index', ['as' => '']);//arreglo temporal
$routes->get('/login/(:num)', 'Login::index2/$1');
$routes->get('/login/(:alpha)/(:num)', 'login::index3/$1/$2');
$routes->get('/landing', 'Landing::index' );