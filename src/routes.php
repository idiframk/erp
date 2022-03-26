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

$router->post('/list_ciddades', 'ObrasController@list_ciddades');

$router->get('/mod_edit_obras/{id}/editar', 'ObrasController@mod_edit_obras');
$router->post('/mod_edit_obras/{id}/editar', 'ObrasController@mod_edit_obrasAction');

$router->get('/mod_edit_obras/{id}/excluir', 'ObrasController@mod_del_obras');




$router->get('/ger_rdo', 'ObrasController@ger_rdo');
$router->post('/ger_rdo', 'ObrasController@addAction');

$router->get('/mod_rdo', 'ObrasController@mod_rdo');


$router->get('/list_rdo', 'ObrasController@list_rdo');


$router->get('/mod_compra', 'ObrasController@mod_compra');




/*exit*/
$router->get('/sair', 'HomeController@sair');