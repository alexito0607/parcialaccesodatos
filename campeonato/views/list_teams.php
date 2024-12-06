<!DOCTYPE html>
<html>
<head>
    <title>Listar Equipos</title>
</head>
<body>
    <h1>Listado de Equipos</h1>
    <?php if (empty($teams)): ?>
        <p>No hay equipos registrados.</p>
    <?php else: ?>
        <?php foreach ($teams as $team): ?>
            <p>Nombre: <?php echo $team->name; ?> - País: <?php echo $team->country; ?> - Código: <?php echo $team->code; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    <br>
    <a href="index.php?controller=PlayerController&action=create">Crear Jugador</a>
</body>
</html>
