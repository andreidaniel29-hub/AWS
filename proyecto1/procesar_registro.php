<?php
$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

if (trim($usuario) === '' || trim($password) === '') {
    die("Error: Debes completar todos los campos.");
}

$file = fopen("usuarios.txt","a");
fwrite($file, $usuario . ":" . password_hash($password, PASSWORD_DEFAULT) . "\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro exitoso</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container registro">
        <h1>Usuario registrado correctamente</h1>
        <p><a href="login.php">Iniciar sesión</a></p>
    </div>
</body>
</html>
