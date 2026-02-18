<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/single','Home::single');
$routes->get('/contacto','Home::contacto');
$routes->get('/conocenos','Home::conocenos');

