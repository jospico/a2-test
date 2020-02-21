<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <title> Prueba para a2 Academia | Ing. José A. Pirela </title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/plugins/bootstrap-4.3.1/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/font-awesome-5.10.1/css/all.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/dataTables/datatables.min.css"/>

    <!-- DatePicker -->
    <link href="assets/plugins/datepicker/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- CSS Personalizado -->
    <link href="assets/css/style.css" rel="stylesheet" > 
    <link rel="stylesheet" href="assets/css/fab.css">

</head>
<body> 
  
<div class="wrapper">

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="http://www.academiaa2.com/"><img src="assets/img/img-a2.png" style="width:45px;" alt="a2"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<main role="main">

  <!-- Jumbotron -->
  <div class="jumbotron">
    <div class="container">
      <h2 class="display-2 text-white"> Registro de Usuarios </h2>
      <h3 class=" text-white"> Ingrese los datos requeridos, haciendo "click" en el botón a continuación. </h3>
      <p style="margin-top:35px; color:white;"><a class="btn btn-success btn-lg" data-toggle="modal" data-target="#agr-modal" role="button">Ingresar Datos </a></p>
    </div>
  </div>
   
  <div class="fab" style="z-index:1000;"> <a data-toggle="modal" data-target="#cv-modal" title="Acerca de..." style="color:white;"><i class="fa fa-info"></i></a></div>

  <div class="container">
    
  <div style="margin-top:30px;" id="tabla"></div>

  <div class="container">
     <div class="row">
       <div class="col text-center">
          <input type="button" id="btn-ocult" class="btn btn-success btn-lg" value="Ocultar Tabla" onclick="ocultarTabla(); cambiarTexto();">
       </div>
     </div>
  </div>
  </div> <!-- /container -->
</main>

</div> <!-- /wrapper -->

<div class="push"></div>


<div class="footer">
  <br>
  <p class="text-center font-weight-bold"> PRUEBA DE SELECCIÓN PARA a2 ACADEMIA </p>
  <p class="text-center font-weight-bold"> <i class="fas fa-copyright"></i> 2020 - Ing. José A. Pirela </p>
</div>

   <!-- ======================================== INCLUDES ================================================= -->
        <?php include('php/agr-modal.php') ?>
        <?php include('pages/cv-modal.php') ?>
   <!-- =================================================================================================== -->
   

   <!-- ======================================= JAVASCRIPT ================================================ -->
       <!-- jQuery -->
       <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script> 
       
       <!-- Popper -->
       <script src="assets/plugins/popper/popper.min.js"></script>

       <!-- Bootstrap JavaScript -->
       <script src="assets/plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>

       <!-- DataTables JavaScript-->
       <script type="text/javascript" src="assets/plugins/dataTables/datatables.min.js"></script> 

       <!--Datepicker JavaScript-->
       <script src="assets/plugins/datepicker/js/gijgo.min.js" type="text/javascript"></script>
       <script src="assets/plugins/datepicker/js/messages/messages.es-es.js" type="text/javascript"></script>

       <!-- JavaScript Personalizado -->
       <script src="assets/js/main.js"></script>

    <!-- ================================================================================================ -->
</body>
</html> 