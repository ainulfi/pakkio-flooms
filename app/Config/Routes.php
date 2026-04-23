<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/monitoring', 'Monitoring::index');
$routes->get('/monitoring/read_sensor', 'Monitoring::read_sensor');
$routes->get('/tracking', 'Tracking::index');
$routes->get('/tracking/read_tracking', 'Tracking::read_tracking');
$routes->get('/information', 'Information::index');
