<?php
include "db.php";

$id = intval($_GET['id'] ?? 0);

$stmt = mysqli_prepare($conn, "SELECT * FROM usuarios WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$usuario = mysqli_fetch_assoc($result);

if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $email  = trim($_POST['email']);
    $edad   = intval($_POST['edad']);
    $rol    = $_POST['rol'];

    $stmt = mysqli_prepare($conn, "UPDATE usuarios SET nombre=?, email=?, edad=?, rol=? WHERE id=?");
    mysqli_stmt_bind_param($stmt, "ssisi", $nombre, $email, $edad, $rol, $id);
    mysqli_stmt_execute($stmt);

    header("Location: list.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Editar Usuario</h1>
<form method="POST">
    <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>
    <input type="email" name="email" value="<?= htmlspecialchars($usuario['email']) ?>" required>
    <input type="number" name="edad" value="<?= htmlspecialchars($usuario['edad']) ?>" required>
    <select name="rol">
        <option value="user" <?= $usuario['rol']=='user'?'selected':'' ?>>Usuario</option>
        <option value="admin" <?= $usuario['rol']=='admin'?'selected':'' ?>>Administrador</option>
    </select>
    <button>Actualizar</button>
</form>
<div class="buttons">
    <a href="list.php">Volver</a>
</div>
</body>
</html>
