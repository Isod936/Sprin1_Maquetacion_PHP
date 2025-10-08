<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario de Usuario</title>
</head>

<body>
    <h2>Registro de Usuario</h2>
    <form action="procesar.php" method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>