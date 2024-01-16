<?php

namespace Dsw\Ifriend\Controllers;


class DefaultController{
  
  public function index(){
    global $blade;
    echo $blade->make('default.index')->render();
  }
}

