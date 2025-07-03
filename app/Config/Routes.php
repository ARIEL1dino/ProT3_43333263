<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal','Home::index');
$routes->get('quienes_somos','Home::quienes_somos');
$routes->get('acerca_de','Home::acerca_de');
$routes->get('registro','Home::registro');
$routes->get('login','Home::login');

/*Rutas del registro de usuario*/
$routes->get('/registro', 'usuario_controller::create');
$routes->POST('/enviar-form', 'usuario_controller::formValidation');
$routes->get('/login', 'usuario_controller::login');
/**/

/*Rutas del LOGIN*/
$routes->get('/login', 'login_controller');
$routes->post('/enviarLogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');