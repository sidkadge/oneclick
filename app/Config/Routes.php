<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::index');
$routes->get('register', 'Home::register');
$routes->post('register', 'Home::saveregister');
$routes->get('Employeedashboard', 'Home::Employeedashboard');
