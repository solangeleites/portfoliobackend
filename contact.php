<?php
header('Access-Control-Allow-Origin: https://solange-leites-galvan.vercel.app');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$conexion = mysqli_connect('localhost', 'id21619166_solange', 'hummusLov3r!', 'id21619166_backendsolange') or exit('No se pudo conectar con la base de datos');
mysqli_query($conexion, "INSERT INTO db_msgportfolio VALUES(DEFAULT, '$_POST[name]', '$_POST[email]', '$_POST[msg]')") or die("Error al insertar los datos en la base de datos");

echo "Su mensaje ha sido enviado con éxito!" ;
 mysqli_close($conexion);