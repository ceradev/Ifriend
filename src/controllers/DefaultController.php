<?php

namespace Dsw\Ifriend\Controllers;


class DefaultController extends Controller{
  
  public function index(){
    // global $blade;

    echo $this->blade->make('index',["router" => $this->router])->render();
  }
}

