<?php
include "db.php";

$nombre = trim($_POST['nombre'] ?? '');
$email  = trim($_POST['email'] ?? '');
$edad   = intval($_POST['edad'] ?? 0);
$rol    = $_POST['rol'] ?? 'user';

if ($nombre=='' || $email=='' || $edad<=0) {
    die("Todos los campos son obligatorios.");
}

// Verificar si existe
$stmt = mysqli_prepare($conn, "SELECT id FROM usuarios WHERE email=?");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$stmt->store_result();

if ($stmt->num_rows>0) die("El email ya está registrado.");

// Insertar usuario
$stmt = mysqli_prepare($conn, "INSERT INTO usuarios (nombre,email,edad,rol) VALUES (?,?,?,?)");
mysqli_stmt_bind_param($stmt, "ssis", $nombre, $email, $edad, $rol);
mysqli_stmt_execute($stmt);

header("Location: login.php");
exit;
?>
