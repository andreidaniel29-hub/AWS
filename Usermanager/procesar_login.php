<?php
include "db.php";
session_start();

$email = trim($_POST['email'] ?? '');
if ($email=='') die("Email obligatorio.");

$stmt = mysqli_prepare($conn, "SELECT id,nombre,rol FROM usuarios WHERE email=?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
$stmt->bind_result($id, $nombre, $rol);

if ($stmt->num_rows === 1) {
    $stmt->fetch();
    $_SESSION['user_id'] = $id;
    $_SESSION['nombre']  = $nombre;
    $_SESSION['rol']     = $rol;

    header("Location: list.php");
    exit;
} else {
    die("Usuario no encontrado.");
}
?>
