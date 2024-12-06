CREATE DATABASE IF NOT EXISTS campeonato;

USE campeonato;

-- Crear tabla de equipos
CREATE TABLE teams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL,
    code VARCHAR(5) NOT NULL UNIQUE
);

-- Crear tabla de jugadores
CREATE TABLE players (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    cedula VARCHAR(255) NOT NULL UNIQUE,
    team_id INT NOT NULL,
    FOREIGN KEY (team_id) REFERENCES teams(id)
);

-- Insertar algunos equipos de ejemplo (opcional)
INSERT INTO teams (name, country, code) VALUES ('Equipo 1', 'País 1', '00001');
INSERT INTO teams (name, country, code) VALUES ('Equipo 2', 'País 2', '00002');


