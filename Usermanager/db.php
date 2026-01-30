<?php
$host = "localhost";
$user = "daniel";   // Cambia si tu usuario es diferente
$pass = "P@ssw0rd";       // Cambia si tienes contraseña
$db   = "usermanager";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
