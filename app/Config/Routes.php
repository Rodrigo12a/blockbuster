<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//pages
$routes->get('/', 'Home::index');
$routes->get('/categorias', 'Home::categorias');
$routes->get('/blog', 'Home::blog');

//login
$routes->get('/login', 'Login::index');//arreglo temporal
$routes->get('/register', 'Login::register');
$routes->get('/forgot-password', 'Login::forgotPassword');

//dashboard
$routes->get('/dashboard', 'panel\Dashboard::index');
