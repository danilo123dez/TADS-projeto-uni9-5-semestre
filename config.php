<?php

require 'environment.php';
/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*/
$config = array();

if (ENVIROMENT === 'development') {
    define('BASE_URL', 'http://localhost/');
    $config['dbname'] = 'projeto_uni9';
    $config['host'] = 'database';
    $config['dbuser'] = 'docker';
    $config['dbpass'] = 'docker123';
}

global $db;

try {
    $db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['dbuser'], $config['dbpass']);

} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}