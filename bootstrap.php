<?php


require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); 
if(getenv('APP_DEBUG') == true){
    error_reporting(E_ALL);
    ini_set('display_errors', true);
}else{
    error_reporting(0);
    ini_set('display_errors', false);
}
session_start();


include __DIR__ . '/src/dependecies.php';
include __DIR__ . '/src/routes.php';
include __DIR__ . '/config.php';
