<!-- ELIMINAR REGISTROS DE LA BASE DE DATOS -->

<?php

if(!empty($_GET)){
			include "../config/conexion-bd.php";
			
			$sql = "DELETE FROM datospersonales WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../index.php';</script>";

			}
}

?>