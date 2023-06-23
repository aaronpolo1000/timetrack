 
<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#exampleModal">Agregar agenda</button>


    




<table class="table table-hover table-sm">
<thead>
    <tr class="bg-success">
<th scope="col"> Id</th>
<th scope="col"> Nombre</th>
<th scope="col">Curso</th>
<th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    <?php $conn = mysqli_connect('localhost','root','','timetrack');
if(!$conn){
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

if(isset($_POST['sql'])){
$sql= $_POST['sql'];}
else{
    $sql="SELECT profesores.*, cursos.curso FROM profesores INNER JOIN cursos ON profesores.id_curso=cursos.id ORDER BY cursos.curso ASC,profesores.nombre ASC";
}
$res= mysqli_query($conn , $sql);
if (!$res) {
    die('Error de Consulta: ' . mysqli_errno($conn));
}while($dou=mysqli_fetch_array($res)){
    $datos=$dou['id']."||".$dou['nombre']."||".$dou['curso'];
    ?>


<tr>
    <th scope="row"> <?php echo $dou['id'] ;?></th>
    <td > <?php echo $dou['nombre']; ?></td>
<td><?php echo $dou['curso']; ?></td>
    <td ><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modificar" onclick="datosEditar('<?php echo $datos ?>')" >Modificar</button>
    <button type="button" class="btn btn-primary" data-toggle="modal"  onclick="eliminarTipo('<?php echo $dou['id'] ?>')">Eliminar</button></td>
    
</tr>



<?php 
}

?>
</tbody>

</table>