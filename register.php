<?php 

require_once("conexion.php");

$name = $_POST['nombre'];
$email = $_POST['email'];
$contra = $_POST['contraseña'];
$contra2 = $_POST['contraseña2'];

$sql = "INSERT INTO usuarios (nombre_usuario, nombre, apellido, email, email_verificado, contraseña, fecha_alta, rol) 
                      VALUES ('$name', '$name', '$name', '$email', true, '$contra', NOW(), 1);";

if($contra == $contra2){
    $res = mysqli_query($con, $sql);

    if(!$res){
        echo "error en la consulta";
    }
}

header("Location: index.php");

?>