<?php
include "db.php";

if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $email  = trim($_POST['email']);
    $edad   = intval($_POST['edad']);
    $rol    = $_POST['rol'] ?? 'user';

    if ($nombre === '' || $email === '' || $edad <= 0) {
        die("Todos los campos son obligatorios.");
    }

    $stmt = mysqli_prepare($conn, "INSERT INTO usuarios (nombre,email,edad,rol) VALUES (?,?,?,?)");
    mysqli_stmt_bind_param($stmt, "ssis", $nombre, $email, $edad, $rol);
    mysqli_stmt_execute($stmt);

    header("Location: list.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Crear Usuario</h1>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="number" name="edad" placeholder="Edad" required>
    <select name="rol">
        <option value="user">Usuario</option>
        <option value="admin">Administrador</option>
    </select>
    <button>Guardar</button>
</form>
<div class="buttons">
    <a href="list.php">Volver</a>
</div>
</body>
</html>
