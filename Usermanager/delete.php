<?php
include "db.php";
$id = intval($_GET['id'] ?? 0);

$stmt = mysqli_prepare($conn, "DELETE FROM usuarios WHERE id=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);

header("Location: list.php");
exit;
?>
