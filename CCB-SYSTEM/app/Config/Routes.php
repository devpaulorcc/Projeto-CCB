<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::login');
$routes->post('login_submit', 'Main::login_submit');
$routes->get('logout', 'Main::logout');

$routes->get('apis', 'Main::apis');

$routes->get('main', 'Main::main');

$routes->get('cadastro', 'Main::cadFirst');
$routes->get('cadastro/segunda', 'Main::cadSecond');
$routes->get('cadastro/segunda/terceira', 'Main::cadThird');
$routes->post('cadastroP', 'Main::cadastroP');
$routes->post('cadastroS', 'Main::cadastroS');
$routes->post('cadastroT', 'Main::cadastroT');

$routes->get('certificate', 'Main::certificate');
$routes->get('consultInfo', 'Main::consultInfo');


$routes->get('consultVolu', 'Main::consultVolu');
$routes->post('consultPesquisa', 'Main::consultPesquisa');