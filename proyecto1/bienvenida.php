<?php 
session_start(); 
if (!isset($_SESSION['usuario'])) { 
    header("Location: login.php"); 
    exit; 
} 
?> 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Bienvenida</title> 
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #8b4bb9ff; /* morado */
            font-family: Arial, sans-serif;
            color: #fff;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            width: 350px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        p {
            margin-top: 10px;
            font-size: 16px;
        }

        a {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head> 
<body> 
    <div class="container">
        <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario']); ?> 🎉</h1> 
        <p>Has iniciado sesión correctamente.</p> 
        <p><a href="logout.php">Cerrar sesión</a></p> 
    </div>
</body> 
</html>