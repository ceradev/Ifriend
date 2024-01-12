<?php

use AltoRouter;

$router = new AltoRouter();

$router->map('GET', '/', function(){
  return '123';
});
