<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->post('login_submit', 'Main::login_submit');

$routes->get('apis', 'Main::apis');

$routes->get('main', 'Main::main');

$routes->get('cad-first', 'Main::cadFirst');
$routes->get('cad-second', 'Main::cadSecond');
$routes->get('cad-third', 'Main::cadThird');

$routes->get('certificate', 'Main::certificate');
$routes->get('consultInfo', 'Main::consultInfo');
$routes->get('consultVolu', 'Main::consultVolu');