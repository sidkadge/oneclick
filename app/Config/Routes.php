<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login', 'Home::index');
$routes->post('auth_login', 'Home::auth_login');
$routes->get('register', 'Home::register');
$routes->post('register', 'Home::saveregister');
$routes->get('Employeedashboard', 'Home::Employeedashboard');
$routes->get('Add_company', 'Home::Add_company');
$routes->post('add_company', 'Home::Add_companynames');
$routes->get('AdminDashboard', 'Home::AdminDashboard');
$routes->get('logout', 'Home::logout');

$routes->get('Add_Employee', 'Home::Add_Employee');
$routes->post('Add_Employee', 'Home::saveEmployee');


