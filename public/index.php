<?php

use Jenssegers\Blade\Blade;

require_once "../vendor/autoload.php";

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$views = '../src/views';
$cache = '../cache';

$blade = new Blade($views, $cache);
$router = new AltoRouter();


include_once('../src/routes/routes.php');
// Router system

$match = $router->match();
if($match) {
 $target = $match["target"];
 if(is_string($target) && strpos($target, "#") !== false) {
     list($controller, $action) = explode("#", $target);
     $controller = $_ENV["NAMESPACE"] . "Controllers\\" . $controller;
     $controller = new $controller($blade,$router);
     $controller->$action($match["params"]);
 } else {
     if(is_callable($match["target"])) 
call_user_func_array($match["target"], $match["params"]);
     else require $match["target"];
 }
} else {
 echo "Ruta no válida";
 die();
}