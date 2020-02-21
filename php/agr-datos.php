<!-- INSERTAR DATOS EN LA BASE DE DATOS -->

<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["fecha"])){
		if($_POST["nombre"]!=""&& $_POST["apellido"]!=""&&$_POST["fecha"]!=""){
			include "../config/conexion-bd.php";
			
			$sql = "insert into datospersonales(nombre,apellido,fecha,creado) value (\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[fecha]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				//print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				//print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}

?>