<?php
require_once '../config/database.php';

class Team {
    private $name;
    private $country;
    private $code;

    public function __construct($data) {
        $this->name = $data['name'];
        $this->country = $data['country'];
        $this->code = $data['code'];
    }

    public function save() {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO teams (name, country, code) VALUES (?, ?, ?)");
        $stmt->execute([$this->name, $this->country, $this->code]);
    }

    public static function exists($code) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM teams WHERE code = ?");
        $stmt->execute([$code]);
        return $stmt->fetch();
    }

    public static function all() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM teams");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function findByCountry($country) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM teams WHERE country = ?");
        $stmt->execute([$country]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public static function findByCode($code) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM teams WHERE code = ?");
        $stmt->execute([$code]);
        return $stmt->fetchObject(__CLASS__);
    }

    public function delete() {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM teams WHERE code = ?");
        $stmt->execute([$this->code]);
    }

    public function update($data) {
        global $pdo;
        $stmt = $pdo->prepare("UPDATE teams SET name = ?, country = ? WHERE code = ?");
        $stmt->execute([$data['name'], $data['country'], $this->code]);
    }
}
?>
