  <nav style="background-color: #B600ED;"  class="navbar navbar-expand-lg navbar-light">
 <a class="navbar-brand" href="index.php" >
    <img  src="images/LogoTimetrack.png" width="30" height="30" class="d-inline-block align-top" alt="">
    TimeTrack
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profesores.php">Profesores</a>
      </li>
   
    </ul>
    <form  class="form-inline my-2 my-lg-0">
      <?php $enlace_actual = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 
      $buscainput= '<input name="buscar" class="form-control mr-sm-2" id="buscar" type="search" placeholder="Search" onkeyup="buscar_ajax(this.value)" aria-label="Search">' ;
      if($enlace_actual!= 'http://localhost/timetrack/index.php'){echo $buscainput;}?>
    <a href="busqueda.php">  <button   style="background-color:#F81FF0; margin-right:100px;"class="btn btn-outline my-2 my-sm-0" type="button" onclick="buscar_ajax(this.value)">Search</button></a>
   
      <a href="iniciarsesion.php">      <button style="background-color:#0091ED; margin-right:20px;" type="button" class="btn btn">Iniciar Sesion</button></a>
      <a href="registrarse.php"> <button style="background-color:#0066ED;margin-right:35px;" type="button" class="btn btn">Registrarse</button></a>
   </form>
  </div>
</nav>
<script> function buscar_ajax(cadena){
		$.ajax({
		type: 'POST',
		url: 'buscar.php',
		data: 'cadena=' + cadena,
		success: function(respuesta) {
			$('#mostrar').html(respuesta);
	   }
	});
	}</script>