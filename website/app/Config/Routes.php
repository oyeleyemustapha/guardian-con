<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Website::index');
$routes->post('contact', 'Website::submit_contact');



