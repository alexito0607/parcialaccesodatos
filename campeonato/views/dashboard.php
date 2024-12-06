<!DOCTYPE html>
<html>
<head>
    <title>Campeonato</title>
</head>
<body>
    <h1>Gestión de Campeonato</h1>
    <a href="index.php?controller=TeamController&action=create">Crear Equipo</a><br>
    <a href="index.php?controller=TeamController&action=list">Listar Equipos</a><br>
    <a href="index.php?controller=TeamController&action=modify">Modificar Equipo</a><br>
    <a href="index.php?controller=TeamController&action=delete">Eliminar Equipo</a><br>
    <a href="index.php?controller=TeamController&action=filterByCountry">Filtrar Equipos por País</a><br>
    <a href="index.php?controller=PlayerController&action=create">Crear Jugador</a><br>
    <a href="index.php?controller=PlayerController&action=list">Listar Jugadores</a><br>

    <?php if ($GLOBALS['controller'] === 'PlayerController' && $GLOBALS['action'] === 'create'): ?>
        <h2>Crear Jugador</h2>
        <?php require 'create_player.php'; ?>
    <?php elseif ($GLOBALS['controller'] === 'TeamController' && $GLOBALS['action'] === 'list'): ?>
        <h2>Listado de Equipos</h2>
        <?php require 'list_teams.php'; ?>
    <?php endif; ?>
</body>
</html>
