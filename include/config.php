<?php 
$conn = mysqli_connect('localhost','root','','timetrack');
if(!$conn){
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}
