<?php

require_once("conexion.php");
require_once("sesion.php");

$name = $_POST['usu'];
$contra = $_POST['contra'];

$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$name' AND contraseña = '$contra'";

$res = mysqli_query($con, $sql);

if(!$res){
    echo "error en la consulta: " . mysqli_error($con);
    exit();
}
else{
    $_SESSION['activo'] = array();
    $_SESSION['activo']['nombre'] = $name;
}

header("Location: index.php");

?>