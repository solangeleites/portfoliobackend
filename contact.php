<?php
header('Access-Control-Allow-Origin: https://solange-leites-galvan.vercel.app');

$conexion = mysqli_connect('localhost', 'id21619166_solange', 'hummusLov3r!', 'id21619166_backendsolange') or exit('No se pudo conectar con la base de datos');

// Obtener datos del formulario
$name = mysqli_real_escape_string($conexion, $_POST['name']);
$email = mysqli_real_escape_string($conexion, $_POST['email']);
$msg = mysqli_real_escape_string($conexion, $_POST['msg']);

// Consulta preparada para evitar inyección SQL
$query = "INSERT INTO db_msgportfolio (nombre, email, mensaje) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conexion, $query);
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $msg);
mysqli_stmt_execute($stmt);

if (mysqli_stmt_affected_rows($stmt) > 0) {
    echo "Su mensaje ha sido enviado con éxito!";
} else {
    echo "Error al enviar el mensaje. Por favor, inténtelo nuevamente.";
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>
