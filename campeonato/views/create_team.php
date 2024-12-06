<!DOCTYPE html>
<html>
<head>
    <title>Crear Equipo</title>
</head>
<body>
    <h1>Crear Equipo</h1>
    <form method="post" action="../public/index.php?controller=TeamController&action=create">
        <label>Nombre del Equipo:</label>
        <input type="text" name="name" required><br>
        <label>País:</label>
        <input type="text" name="country" required><br>
        <label>Código Numérico (5 dígitos):</label>
        <input type="text" name="code" required><br>
        <input type="submit" value="Crear">
    </form>
</body>
</html>
