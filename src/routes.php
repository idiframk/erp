<?php

use core\Router;

$router = new Router();

$router->get('/login', 'UsuariosController@login');
$router->post('/login', 'UsuariosController@loginAction');

$router->get('/', 'HomeController@home');
$router->get('/home', 'HomeController@home');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/cad_obra', 'HomeController@cad_obra');
$router->get('/ger_rdo', 'HomeController@ger_rdo');
$router->get('/modal_cad_obra', 'HomeController@modal_cad_obra');
$router->get('/list_rdo', 'HomeController@list_rdo');

$router->get('/sair', 'HomeController@sair');