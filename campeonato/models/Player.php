<?php
require_once '../config/database.php';

class Player {
    private $name;
    private $cedula;
    private $team_id;

    public function __construct($data) {
        $this->name = $data['name'];
        $this->cedula = $data['cedula'];
        $this->team_id = $data['team_id'];
    }

    public function save() {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO players (name, cedula, team_id) VALUES (?, ?, ?)");
        $stmt->execute([$this->name, $this->cedula, $this->team_id]);
    }

    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT players.*, teams.name as team_name FROM players JOIN teams ON players.team_id = teams.id");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function findByTeam($team_id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM players WHERE team_id = ?");
        $stmt->execute([$team_id]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
?>
