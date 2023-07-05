<?php 
if()
//Recogemos la cadena
$busqueda=$_POST['cadena'];
$sql="SELECT profesores.*, cursos.curso FROM profesores INNER JOIN cursos ON profesores.id_curso=cursos.id WHERE nombre LIKE '%$busqueda%' ORDER BY cursos.curso ASC,profesores.nombre ASC";
//Esto se pega en la div #mostrar
echo $busqueda;//Mostrar los resultados aquí

?>