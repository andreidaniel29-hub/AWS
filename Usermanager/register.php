<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Registro</h1>
<form method="POST" action="procesar_registro.php">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="number" name="edad" placeholder="Edad" required>
    <select name="rol">
        <option value="user">Usuario</option>
        <option value="admin">Administrador</option>
    </select>
    <button type="submit">Registrarse</button>
</form>
<div class="buttons">
    <a href="login.php">Login</a>
    <a href="index.php">Volver</a>
</div>
</body>
</html>
