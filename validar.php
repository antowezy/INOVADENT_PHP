<?php

if (!empty($_POST["btningresar"])){
	if (empty($_POST["usuario"]) and empty($_POST["contraseña"])){
		echo '<div class"alert alert-danger>"LOS CAMPS ESTAN VACIOS"</div>';
	}else{
		$usuario=$_POST["usuario"];
		$contraseña=$_POST["contraseña"];
		$sql=$conexion->query("select * from usuario where usuario=$usuario and contraseña=$contraseña");
		if ($datos=$sql->fecth_object()){
			header("location:iniciar_cliente.php");
		}else{
			echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
		}
	}
}

?>