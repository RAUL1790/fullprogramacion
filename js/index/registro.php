<?php
//var_dump($_POST);
include ('../../conexion.php');
$n = $_POST['nombre'];
$c = $_POST['correo'];
$p = $_POST['password'];

$sql = "INSERT INTO usuario (nombre,correo,contraseña,tipo_usuario) VALUES ('".$n."','".$c."','".$p."','usuario')";
$result = pg_query($sql) or die ("Error");
header ("Location: ../../index.php?msg=ok");

?>