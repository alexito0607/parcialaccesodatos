<?php
require_once '../models/Player.php';
require_once '../models/Team.php';

class PlayerController {
    public function create() {
        global $controller, $action;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            $player = new Player($data);
            $player->save();
            echo "Jugador registrado exitosamente.";
        } else {
            $teams = Team::all();
            require '../views/dashboard.php';
        }
    }

    public function list() {
        global $controller, $action;

        $players = Player::all();
        require '../views/dashboard.php';
    }
}
?>
