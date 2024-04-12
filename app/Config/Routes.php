<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('articulos', 'Controlador::index');
$routes->get('articulos/nuevo', 'Controlador::new');
$routes->get('articulos/editar/(:num)', 'Controlador::edit/$1');
$routes->post('articulos/crear', 'Controlador::create');
$routes->get('articulos/(:num)', 'Controlador::see/$1');