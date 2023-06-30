
<div class="container">
        <div class="row">
           <div id="filtro"></div>
        </div>
    <div class="container">
        <div class="row">
            <h3>tipos</h3>
        </div>
        <div class="row">
            <div id="tabla"></div>
        </div>
    </div>

    <div id="modal"></div>

<script type="text/javascript">
    $(document).ready(function(){
$('#tabla').load('tablaTipos.php')
$('#modal').load('modalTipos.php')
$('#filtro').load('listaTipos.php')
    });

</script>
<script>
    function guardarTipo(){
var tipo=$('#txtTipo').val();
var curso=$('#curso1').val();
var sql="INSERT INTO profesores(nombre,id_curso) VALUES('"+tipo+"','"+curso+"')";
var cadena="sql="+sql+"&operacion=1";
$.ajax({
type:"POST",
url:"registrosTipo.php",
data:cadena,
success:function(r){
    $('#tabla').load('tablaTipos.php');
    alertify.success("Se añadio correctamente");
},
error:function(r){ 
alertify.error("Error: "+r);    
}

});


}


function datosEditar(datos){
d=datos.split('||');
  $('#txtIdTipo').val(d[0]);
  $('#txtTipoM').val(d[1]);
  $('#curso').val(d[2]);

   }


   function modificarTipo(){
        var id=$('#txtIdTipo').val();
        var tipo=$('#txtTipoM').val();
        var curso=$('#cursoM').val();
        var sql="UPDATE profesores SET nombre='"+tipo+"', id_curso='"+curso+"'  WHERE id="+id;
        var cadena="sql="+sql+"&operacion=2";
        $.ajax({
        type:"POST",
        url:"registrosTipo.php",
        data:cadena,
        success:function(r){
            $('#tabla').load('tablaTipos.php');
            alertify.success("Se modifico correctamente");
        },
        error:function(r){ 
        alertify.error("Error: "+r);    
        }
        
        });
        
        
        }

function borrarSiNo(id) {
    alertify.confirm("Nombre","¿Seguro que quiere eliminar el alumno?"),
    function(){eliminarTipo(id)},
    function(){  alertify.error("Error eliminacion. ")}
    
}
function eliminarTipo(id){
var sql="DELETE FROM profesores WHERE id="+id;
var cadena="sql="+sql+"&operacion=3";
$.ajax({
type:"POST",
url:"registrosTipo.php",
data:cadena,
success:function(r){
    $('#tabla').load('tablaTipos.php');
    alertify.success("El tipo a sido eliminado");
},
error:function(r){ 
alertify.error("Error: "+r);    
}

});

        }

function actualizar(idTipo) {
if (idTipo==0){
var cadena="sql=SELECT profesores.*, cursos.curso FROM profesores INNER JOIN cursos ON profesores.id_curso=cursos.id ORDER BY cursos.curso ASC,profesores.nombre ASC";
}else{
    var cadena="sql=SELECT profesores.*, cursos.curso FROM profesores INNER JOIN cursos ON profesores.id_curso=cursos.id WHERE id_curso= "+idTipo+" ORDER BY cursos.curso ASC,profesores.nombre ASC";
}
$.ajax({
type :"POST",
url:"tablaTipos.php",
data:cadena,
success:function(r){
    $('#tabla').html(r);
},
error:function(r){
    alertify.error("error a cargar los productos"+r);
}

});
  }

</script>