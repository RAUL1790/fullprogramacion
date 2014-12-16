<?php
var_dump($_POST);
include ('../../conexion.php');
$c = $_POST['corr'];
$p = $_POST['pass'];

$sql = "SELECT * FROM usuario WHERE correo ='".$c."' and  contraseña='".$p."'";
$result = pg_query($sql) or die ("Error");
if(pg_num_rows($result) > 0){
header ("Location: ../../principal.php");
}else{
header ("Location: ../../index.php?msg=nak");
}
?>