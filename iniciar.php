<?php
ob_start();
if((empty($_POST['usuario'])) and (empty($_POST['contraseña'])))
{
	require "iniciarsesion.html";
}else{
	echo "Reeingrese el usuario o contraseña";
		include("conexion.php");
	
		$link=Conectarse();
		$contrasenia=$_POST['contraseña'];
		$correo=$_POST['correo'];
	
		$consulta3="select * from usuario where correo='$correo' and contraseña='$contrasenia'";
	
		$res3=mysqli_query($link, $consulta3) or die (mysqli_error());
		if( mysqli_num_rows($res3)>0)
		{	
			while ($fila = mysqli_fetch_row($res3)) {
				$id=$fila[0];
			}
			session_start();
			$_SESSION´['usuario']=$id;			
			header("Location:iniciarsesion.php");
			exit;
		}else{require "iniciarsesion.php";}
				ob_end_flush();
	}



?>