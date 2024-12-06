<!DOCTYPE html>
<html>
<head>
    <title>Listar Jugadores</title>
</head>
<body>
    <h1>Listado de Jugadores</h1>
    <?php if (empty($players)): ?>
        <p>No hay jugadores registrados.</p>
    <?php else: ?>
        <?php foreach ($players as $player): ?>
            <p>Nombre: <?php echo $player->name; ?> - Cédula: <?php echo $player->cedula; ?> - Equipo: <?php echo $player->team_name; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
