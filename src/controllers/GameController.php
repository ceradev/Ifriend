<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\Game;

require_once("../src/connection.php");

class GameController extends Controller{
  
  public function index(){
    $games = Game::where([
      "id_admin" => $_SESSION["id"]
    ])->get();
    echo $this->blade->make('game.index',["router" => $this->router, "games" => $games])->render();
  }

  public function post() {
    $game = new Game;
    $game->name = $_POST["name"];
    $game->id_admin = $_SESSION["id"];
    $game->save();
    header("Location: " . $this->router->generate("game_index"));
  }
}

