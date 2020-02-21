<!-- FORMULARIO DEL MODAL PARA EDITAR REGISTROS -->

<?php
include "../config/conexion-bd.php";

$user_id=null;
$sql1= "select * from datospersonales where id = ".$_GET["id"];
$query = $con->query($sql1);
$datos = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $datos=$r;
  break;
}

  }
?>

<?php if($datos!=null):?>

<form role="form" id="actualizar" >
  <div class="form-row" style="margin-top:20px;">
     <div class="col-md-4 mb-3">
        <div class="input-group">
           <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i> </span>
           </div>
            <input type="text" name="nombre" class="form-control" value="<?php echo $datos->nombre; ?>" onkeyup="this.value = this.value.toUpperCase();" placeholder="Nombre" autocomplete="off" required>
        </div>
      </div>
      <div class="col-md-4 mb-3">                        
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i> </span>
          </div>
          <input type="text" name="apellido" class="form-control" value="<?php echo $datos->apellido; ?>" onkeyup="this.value = this.value.toUpperCase();" placeholder="Apellido" autocomplete="off" required>
        </div>
      </div>
      <div class="col-md-4 mb-3">                         
        <div class="input-group">
          <input id="datepicker" type="text" name="fecha" class="form-control" value="<?php echo $datos->fecha; ?>" placeholder="Fecha" autocomplete="off" required>  
        </div>
      </div>
    </div>
  </div> 
  <input type="hidden" name="id" value="<?php echo $datos->id; ?>">
  <div class="modal-footer" style="margin-top:20px; margin-bottom:-10px;">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
    <button type="submit" class="btn btn-success">Actualizar</button>
  </div>
</form>

<!-- ======================================== JAVASCRIPT =========================================== -->
<script>
    $("#actualizar").submit(function(e){
    e.preventDefault();
    $.post("./php/act-datos.php",$("#actualizar").serialize(),function(data){
    });
    //alert("Agregado exitosamente!");
    //$("#actualizar")[0].reset();
    $('#editModal').modal('hide');
    $('body').removeClass('modal-open');
    $('.modal-backdrop').remove();
    loadTabla();
  });

  $('#datepicker').datepicker({
  uiLibrary: 'bootstrap4',
  locale:'es-es',
  format: 'dd/mm/yyyy'
});
</script>
<!-- ================================================================================================= -->

<?php else:?>
  <p class="alert alert-danger">¡ERROR! Datos No Encontrados.</p>
<?php endif;?>