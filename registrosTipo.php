<?php $conn = mysqli_connect('localhost','root','','timetrack');
if(!$conn){
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

$op=$_POST['operacion'];
switch($op){
    case 1://ingresar
        $sql=$_POST['sql'];
        echo mysqli_query($conn,$sql);
        break;
        case 2://modificar
            $sql=$_POST['sql'];
            echo mysqli_query($conn,$sql);
            break;
            case 3://eliminar
                $sql=$_POST['sql'];
                echo mysqli_query($conn,$sql);
                break;
}

?>