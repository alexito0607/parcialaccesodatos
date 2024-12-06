<!DOCTYPE html>
<html>
<head>
    <title>Crear Jugador</title>
</head>
<body>
    <h1>Crear Jugador</h1>
    <form method="post" action="../public/index.php?controller=PlayerController&action=create">
        <label>Nombre del Jugador:</label>
        <input type="text" name="name" required><br>
        <label>Cédula:</label>
        <input type="text" name="cedula" required><br>
        <label>Equipo:</label>
        <select name="team_id" required>
            <?php foreach ($teams as $team): ?>
                <option value="<?php echo $team->id; ?>"><?php echo $team->name; ?></option>
            <?php endforeach; ?>
        </select><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
