<?php
require_once '../models/Team.php';

class TeamController {
    public function create() {
        global $controller, $action;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            if (Team::exists($data['code'])) {
                echo "El equipo ya está registrado.";
            } else {
                $team = new Team($data);
                $team->save();
                echo "Equipo registrado exitosamente.";
            }
        }
        require '../views/dashboard.php';
    }

    public function list() {
        global $controller, $action;

        $teams = Team::all();
        require '../views/dashboard.php';
    }

    public function filterByCountry() {
        global $controller, $action;

        if (isset($_GET['country'])) {
            $country = $_GET['country'];
            $teams = Team::findByCountry($country);
            require '../views/dashboard.php';
        } else {
            echo "Por favor, proporcione un país.";
        }
    }

    public function delete() {
        global $controller, $action;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $code = $_POST['code'];
            $team = Team::findByCode($code);
            if ($team) {
                $team->delete();
                echo "Equipo eliminado.";
            } else {
                echo "Equipo no encontrado.";
            }
        } else {
            require '../views/dashboard.php';
        }
    }

    public function modify() {
        global $controller, $action;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            $team = Team::findByCode($data['code']);
            if ($team) {
                $team->update($data);
                echo "Equipo actualizado.";
            } else {
                echo "Equipo no encontrado.";
            }
        } else {
            require '../views/dashboard.php';
        }
    }
}
?>
