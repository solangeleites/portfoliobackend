<?php
header('Access-Control-Allow-Origin: https://solange-leites-galvan.vercel.app');

// $conexion = mysqli_connect('localhost', 'root', '', 'db_portfolio');
// if(mysqli_connect_error()){
//     echo "Error al conectar con la base de datos";
//     exit();
// } else {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $msg = $_POST['msg'];

//     $sql($conexion, "INSERT INTO db_msgportfolio VALUES(DEFAULT, '$name', '$email', '$msg')");
//     $res = mysqli_query($conexion, $sql);

//     if($res){
//         echo "Datos insertados correctamente";
//     } else {
//         echo "Error al insertar los datos en la base de datos";
//     }
//     $conexion->close();
// }


$conexion = mysqli_connect('localhost', 'id21619166_solange', 'hummusLov3r!', 'id21619166_backendsolange') or exit('No se pudo conectar con la base de datos');
mysqli_query($conexion, "INSERT INTO db_msgportfolio VALUES(DEFAULT, '$_POST[name]', '$_POST[email]', '$_POST[msg]')") or die("Error al insertar los datos en la base de datos");

echo "Su mensaje ha sido enviado con éxito!" ;
 mysqli_close($conexion);