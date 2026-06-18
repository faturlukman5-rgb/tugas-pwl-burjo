<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */

$routes->get('/', 'Dashboard::index');

$routes->get('/menu', 'Menu::index');

$routes->get('/menu/create', 'Menu::create');
$routes->post('/menu/store', 'Menu::store');

$routes->get('/menu/edit/(:num)', 'Menu::edit/$1');
$routes->post('/menu/update/(:num)', 'Menu::update/$1');

$routes->get('/menu/delete/(:num)', 'Menu::delete/$1');