<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Equipo</title>
</head>
<body>
    <h1>Eliminar Equipo</h1>
    <form method="post" action="../public/index.php?controller=TeamController&action=delete">
        <label>Código del Equipo (5 dígitos):</label>
        <input type="text" name="code" required><br>
        <input type="submit" value="Eliminar">
    </form>
</body>
</html>
