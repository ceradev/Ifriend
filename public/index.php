<?php

use Jenssegers\Blade\Blade;

require_once "../vendor/autoload.php";


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
     $controller = "Dsw\\Ifriend\\Controllers\\" . $controller;
     $controller = new $controller;
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