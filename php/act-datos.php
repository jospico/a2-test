<!-- ACTUALIZAR DATOS EN LA BASE DE DATOS -->

<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["fecha"])){
		if($_POST["nombre"]!=""&& $_POST["apellido"]!=""&&$_POST["fecha"]!=""){
			include "../config/conexion-bd.php";
			
			$sql = "update datospersonales set nombre=\"$_POST[nombre]\",apellido=\"$_POST[apellido]\",fecha=\"$_POST[fecha]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../index.php';</script>";

			}
		}
	}
}

?>