<div class="form-group">
            <label for="message-text" class="col-form-label" >Curso</label>
            <select class="form-select" id="curso" aria-label="Default select example" onchange="actualizar($(this).val())">
                

            <option value="" selected>Seleccione curso</option>

            <?php 
$conn = mysqli_connect('localhost','root','','timetrack');
if(!$conn){
    die('Error de Conexión (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

$sql1= "SELECT * FROM cursos ORDER BY curso ASC";
$res1= mysqli_query($conn , $sql1);
if (!$res1) {
    die('Error de Consulta: ' . mysqli_errno($conn));
  } while($dou3=mysqli_fetch_array(($res1))){
echo "<option value='".$dou3['id']."'>".$dou3['curso']."</option>";
  }
         ?>
</select>
          </div>