<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";

// Traer todos los usuarios
$result = mysqli_query($conn, "SELECT * FROM usuarios");

// Verificar errores en la consulta
if (!$result) {
    die("Error en la consulta: " . mysqli_error($conn));
}

// Contar registros
$usuarios = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<h1>Usuarios</h1>

<div class="buttons">
    <a href="create.php">+ Crear Usuario</a>
    <a href="index.php">Volver</a>
</div>

<?php if (count($usuarios) > 0): ?>
<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Edad</th>
    <th>Rol</th>
    <th>Acciones</th>
</tr>

<?php foreach ($usuarios as $u): ?>
<tr>
    <td><?= htmlspecialchars($u['id']) ?></td>
    <td><?= htmlspecialchars($u['nombre']) ?></td>
    <td><?= htmlspecialchars($u['email']) ?></td>
    <td><?= htmlspecialchars($u['edad']) ?></td>
    <td><?= htmlspecialchars($u['rol']) ?></td>
    <td>
        <a href="edit.php?id=<?= $u['id'] ?>">Editar</a> |
        <a href="delete.php?id=<?= $u['id'] ?>">Eliminar</a>
    </td>
</tr>
<?php endforeach; ?>

</table>
<?php else: ?>
<p>No hay usuarios registrados todavía.</p>
<?php endif; ?>

</body>
</html>
