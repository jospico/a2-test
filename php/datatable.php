<?php

include "../config/conexion-bd.php";

$user_id=null;
$sql1= "select * from datospersonales";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table id="myTable" class="table table-bordered table-hover">
<thead class="text-center bg-primary text-white">
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Fecha</th>
	<th> Acciones </th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr class="text-center">
	<td><?php echo $r["nombre"]; ?></td>
	<td><?php echo $r["apellido"]; ?></td>
	<td><?php echo $r["fecha"]; ?></td>
		<td style="width:150px;">
		<a data-id="<?php echo $r["id"];?>" class="btn btn-edit btn-sm btn-warning" data-toggle="tooltip" data-placement="bottom" title="Editar Registro"><i class="fas fa-edit"></i></a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Eliminar Registro"><i class="fas fa-trash"></i></a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				$.get("./php/elim-datos.php","id="+<?php echo $r["id"];?>,function(data){
					loadTabla();
				});
			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;?>
  <!-- Modal -->
  <script>
  	$(".btn-edit").click(function(){
  		id = $(this).data("id");
  		$.get("./php/edit-modal.php","id="+id,function(data){
  			$("#form-edit").html(data);
  		});
  		$('#editModal').modal('show');
  	});
  </script>
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      <div class="modal-header bg-primary">
          <h4 class="modal-title text-white" id="exampleModalLabel"> <i class="fas fa-edit"></i> EDITAR REGISTRO </h4>       
        </div>
        <div class="modal-body">
          <div id="form-edit"></div>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<!-- ******************************** JAVASCRIPT ************************************************** -->
<script>

//Generar DataTable
$(document).ready(function(){
    $('#myTable').DataTable({
		    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "Todos"]],
        "language": idioma_español
	});

 });

 //Cambiar Idioma de DataTable
 var idioma_español= {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}

//Inicializar ToolTips de Bootstrap
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
<!-- ********************************************************************************************* -->