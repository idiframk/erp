<?php
//Conexão bd
session_start();
require __DIR__ . '/vendor/autoload.php';

define('BASE_URL', 'http://172.16.0.217/SGRM/');
//define('BASE_URL', 'http://localhost/idideveloper.com.br/');
//define('BASE_URL', 'https://idideveloper.com.br/');

// Ajuste o fuso horário para o PHP 5.1 e superior:
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

ini_set('display_errors', 'On');
ini_set('log_errors', 'On');
ini_set('track_errors', 'On');
ini_set('html_errors', 'On');

# FORMATA A DATA PARA O PADRÃO DO BRASIL
function dataBr($data)
{
    if ($data != '') {
        return date('d/m/Y', strtotime($data));
    }
}

global $pdo;
try {

    //$pdo = new PDO("mysql:dbname=websyt29_bd_projectcivil;host=localhost", "projectcivil", "prjct#c41", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));    
    //$pdo = new PDO("mysql:dbname=websyt29_bd_projectcivil;host=localhost", "admin", "3313", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo = new PDO("mysql:dbname=bd_erp;host=localhost", "root", "9021", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    echo "ERRO" . $e->getMessage();
    exit;
}