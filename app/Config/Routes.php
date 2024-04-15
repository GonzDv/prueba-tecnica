<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Controlador::index');


$routes->get('articulos', 'Controlador::lista');

$routes->put('articulos/(:num)', 'Controlador::update/$1');
$routes->get('articulos/editar/(:num)', 'Controlador::edit/$1');


$routes->get('articulos/crear', 'Controlador::create');

$routes->post('articulos/crear', 'Controlador::save');



$routes->get('articulos/(:num)', 'Controlador::see/$1');
$routes->get('articulos/admin', 'Controlador::admin');

$routes->get('articulos/delete/(:num)', 'Controlador::delete/$1');

// $routes->get('delete/(num)', 'Controlador::delete/$1');
// //CRUD

$routes->get('articulos/contenido/(:num)', 'Controlador::see/$1');
$routes->post('articulos/upload/upload', 'Upload::upload');