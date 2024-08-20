<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('Employeedashboard', 'Home::Employeedashboard');
$routes->get('Add_company', 'Home::Add_company');
$routes->post('add_company', 'Home::Add_companynames');
