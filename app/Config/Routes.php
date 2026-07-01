<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// ================= LOGIN =================

$routes->get('/login', 'Login::index');
$routes->post('/login/auth', 'Login::auth');
$routes->get('/logout', 'Login::logout');


// ================= HALAMAN YANG WAJIB LOGIN =================

$routes->group('', ['filter' => 'auth'], function($routes){

    $routes->get('/', 'Dashboard::index');

    // MENU
    $routes->get('/menu', 'Menu::index');
    $routes->get('/menu/create', 'Menu::create');
    $routes->post('/menu/store', 'Menu::store');
    $routes->get('/menu/edit/(:num)', 'Menu::edit/$1');
    $routes->post('/menu/update/(:num)', 'Menu::update/$1');
    $routes->get('/menu/delete/(:num)', 'Menu::delete/$1');
$routes->get('/menu/pdf', 'Menu::pdf');
    // PELANGGAN
    $routes->get('/pelanggan', 'Pelanggan::index');
    $routes->get('/pelanggan/create', 'Pelanggan::create');
    $routes->post('/pelanggan/store', 'Pelanggan::store');
    $routes->get('/pelanggan/edit/(:num)', 'Pelanggan::edit/$1');
    $routes->post('/pelanggan/update/(:num)', 'Pelanggan::update/$1');
    $routes->get('/pelanggan/delete/(:num)', 'Pelanggan::delete/$1');

$routes->get('cart', 'CartController::index');
$routes->get('cart/add/(:num)', 'CartController::add/$1');
$routes->post('cart/update/(:num)', 'CartController::update/$1');
$routes->get('cart/remove/(:num)', 'CartController::remove/$1');
$routes->get('cart/clear', 'CartController::clear');
});