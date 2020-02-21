<!-- MODAL PARA INGRESO DE DATOS -->

<div class="modal fade" id="agr-modal" tabindex="-1" role="dialog" aria-labelledby="agrModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
             <div class="modal-header bg-primary">
                <h4 class="modal-title text-white" id="agrModalLabel"> <i class="fas fa-pen"></i> INGRESAR DATOS </h4>
             </div>
             <div class="modal-body"> 
                 <form role="form" method="post" id="agregar">
                     <div class="form-row" style="margin-top:20px;">
                       <div class="col-md-4 mb-3">
                         <div class="input-group">
                            <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-user"></i> </span>
                            </div>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" required>
                         </div>
                       </div>
                       <div class="col-md-4 mb-3">                        
                         <div class="input-group">
                            <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fas fa-user"></i> </span>
                            </div>
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido" onkeyup="this.value = this.value.toUpperCase();" autocomplete="off" required>
                         </div>
                       </div>
                       <div class="col-md-4 mb-3">                         
                         <div class="input-group">
                            <input id="datepicker" type="text" name="fecha" class="form-control" placeholder="Fecha" aria-describedby="inputGroupPrepend" autocomplete="off" required>  
                         </div>
                        </div>
                      </div>
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-danger" data-dismiss="modal"> Cerrar </button>
               <button type="submit" class="btn btn-success"> Agregar </button>
             </div>
      </form>         
    </div>
  </div>
</div>