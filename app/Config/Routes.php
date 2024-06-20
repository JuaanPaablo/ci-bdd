<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/vista', 'CLogeo::index');
$routes->post('/resultado', 'CLogeo::Csuma');
// ESTAS SON LAS RUTAS DE LAS 3 VISTAS
$routes->get('/vista1', 'Home::Returnvista1');
$routes->get('/vista2', 'Home::Returnvista2');
$routes->get('/vista3', 'Home::Returnvista3');
// ESTAS ES LA RUTA CON VARIABELS
$routes->get('/vista4/(:num)', 'Home::Returnvista3/$1');
// ESTAS ES LA RUTA CON CATALOGO
$routes->get('/catalogo/(:any)', 'Home::Returncatalogo/$1');
//RUTA DE BDD
$routes->get('/testbase', 'Home::testdb');