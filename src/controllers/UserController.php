<?php

namespace Dsw\Ifriend\Controllers;


class UserController{
  
  public function index(){
    global $blade;
    $name = 'Pedro';
    echo $blade->make('user.index', ['name' => 'Pedro'])->render();
  }
}
