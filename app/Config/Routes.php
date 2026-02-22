<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/filtrar/zona/(:any)', 'Home::filtrosHome/$1');
$routes->get('/single/(:any)','Home::single/$1');
$routes->get('/contacto','Home::contacto');
$routes->get('/conocenos','Home::conocenos');

