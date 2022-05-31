<?php

use core\Router;

$router = new Router();

/*Controles Users*/
$router->get('/login', 'UsuariosController@login');
$router->post('/login', 'UsuariosController@loginAction');


/*pages home*/
$router->get('/', 'HomeController@home');
$router->get('/home', 'HomeController@home');

/*filter cyti*/
$router->post('/list_ciddades', 'ObrasController@list_ciddades');



/*Obras - start*/
$router->get('/cad_obra', 'ObrasController@cad_obra');
$router->get('/mod_cad_obras', 'ObrasController@mod_cad_obras');
$router->post('/mod_cad_obras', 'ObrasController@obra_addAction');


$router->get('/mod_edit_obras/{id}/editar', 'ObrasController@mod_edit_obras');
$router->post('/mod_edit_obras/{id}/editar', 'ObrasController@mod_edit_obrasAction');


$router->get('/mod_del_obra/{id}/excluir', 'ObrasController@mod_del_obra');
$router->post('/mod_del_obra/{id}/excluir', 'ObrasController@mod_del_obrasAction');

/*Obras - finish*/


/*Suprimentos - materiais - start*/
$router->get('/dash_material', 'SuprimentosController@dash_material');
$router->get('/cad_list_material', 'SuprimentosController@cad_list_material');
$router->get('/mod_cad_materiais', 'SuprimentosController@mod_cad_materiais');
$router->post('/mod_cad_materiais', 'SuprimentosController@material_addAction');


/*Suprimentos - materiais - finish*/


$router->get('/ger_rdo', 'ObrasController@ger_rdo');
$router->post('/ger_rdo', 'ObrasController@addAction');

$router->get('/mod_rdo', 'ObrasController@mod_rdo');


$router->get('/list_rdo', 'ObrasController@list_rdo');


$router->get('/mod_compra', 'ObrasController@mod_compra');




/*exit*/
$router->get('/sair', 'HomeController@sair');