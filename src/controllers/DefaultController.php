<?php

namespace Dsw\Ifriend\Controllers;


class DefaultController{
  
  public function index(){
    global $blade;
    $name = 'Pedro';
    echo $blade->make('index', ['name' => 'Pedro'])->render();
  }
}

