<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\user_game;

require_once("../src/connection.php");

class UserGameController extends Controller{
  
  public function index(){
    $router = $this->router;
    $games = User_game::all();
    foreach($games as $game) {
      echo "<p>$game</p>";
    }
  }

}

