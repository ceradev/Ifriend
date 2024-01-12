<?php

namespace Dsw\Ifriend\Controllers;


class DefaultController{
  
  public function index(){
    global $blade;
    $name = 'Pedro';
    echo $blade->make('default.index', ['name' => 'Pedro'])->render();
  }
}

