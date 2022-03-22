<?php

use core\Router;

$router = new Router();

/*Controles Users*/
$router->get('/login', 'UsuariosController@login');
$router->post('/login', 'UsuariosController@loginAction');


/*pages home*/
$router->get('/', 'HomeController@home');
$router->get('/home', 'HomeController@home');




/*Obras*/
$router->get('/cad_obra', 'ObrasController@cad_obra');


$router->get('/mod_cad_obras', 'ObrasController@mod_cad_obras');
$router->post('/mod_cad_obras', 'ObrasController@obra_addAction');

$router->get('/ger_rdo', 'ObrasController@ger_rdo');
$router->post('/ger_rdo', 'ObrasController@addAction');




$router->get('/list_rdo', 'ObrasController@list_rdo');





/*exit*/
$router->get('/sair', 'HomeController@sair');