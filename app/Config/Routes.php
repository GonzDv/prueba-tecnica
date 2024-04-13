<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'Home::index');
$routes->get('articulos', 'Controlador::index');
$routes->get('articulos/nuevo', 'Controlador::new');
$routes->put('articulos/editar/(:num)', 'Controlador::update/$1');
$routes->put('articulos/(:segment)', 'Controlador::update/$1');
$routes->get('articulos/editar/(:num)', 'Controlador::edit/$1');
$routes->post('articulos/crear', 'Controlador::create');
$routes->get('articulos/(:num)', 'Controlador::see/$id');
$routes->get('articulos/admin', 'Controlador::admin');
$routes->delete('articulos/admin(:num)', 'Controlador::delete/$id');
