function loadTabla(){
$('#editModal').modal('hide');

$.get("./php/datatable.php","",function(data){
    $("#tabla").html(data);
    })
}   
$("#buscar").submit(function(e){
e.preventDefault();
$.get("./php/busqueda.php",$("#buscar").serialize(),function(data){
$("#tabla").html(data);
$("#buscar")[0].reset();
});
});

loadTabla();

$("#agregar").submit(function(e){
e.preventDefault();
$.post("./php/agr-datos.php",$("#agregar").serialize(),function(data){
});
//alert("Agregado exitosamente!");
$("#agregar")[0].reset();
$('#agr-modal').modal('hide');
loadTabla();
});
/*****************************************************************************/


/********** FUNCIÓN PARA OCULTAR LA TABLA AL CLICKEAR EL BOTÓN **************/
function ocultarTabla() {
  var x = document.getElementById("tabla");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
/**************************************************************************/


/******** FUNCIÓN PARA CAMBIAR EL VALUE DEL BOTÓN AL CLICKEARLO **********/
function cambiarTexto(){
    var elem = document.getElementById("btn-ocult");
    if (elem.value=="Ocultar Tabla") elem.value = "Mostrar Tabla";
    else elem.value = "Ocultar Tabla";
}
/***********************************************************************/


/********** INICIALIZACIÓN Y CONFIGURACIÓN DEL DATEPICKER *************/
$('#datepicker').datepicker({
  uiLibrary: 'bootstrap4',
  locale:'es-es',
  format: 'dd/mm/yyyy'
});
/********************************************************************/