<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión</title>
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
            width: 300px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
            color: #fff;
        }

        input {
            width: 100%;
            padding: 8px;
            border: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #fff;
            color: #8b4bb9ff;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #e0d4f7;
        }

        p {
            margin-top: 15px;
            font-size: 14px;
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
        <h1>Login</h1>
        <form action="procesar_login.php" method="post">
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Entrar</button>
        </form>
        <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </div>
</body>
</html>