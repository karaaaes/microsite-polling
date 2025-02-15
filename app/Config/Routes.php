<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->get('/success', 'Home::success');
$routes->get('/export/csv', 'Home::exportCsv');
$routes->post('/sendform', 'Home::sendForm');
$routes->post('/survey/checkEmail', 'Survey::checkEmail');

$routes->setAutoRoute(true);