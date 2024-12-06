<!DOCTYPE html>
<html>
<head>
    <title>Modificar Equipo</title>
</head>
<body>
    <h1>Modificar Equipo</h1>
    <form method="post" action="../public/index.php?controller=TeamController&action=modify">
        <label>Código del Equipo (5 dígitos):</label>
        <input type="text" name="code" required><br>
        <label>Nombre del Equipo:</label>
        <input type="text" name="name"><br>
        <label>País:</label>
        <input type="text" name="country"><br>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>
