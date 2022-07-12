<?php
		$usuario=$_POST["usuario"];
		$nombre=$_POST["nombre"];		
		$apellidoP=$_POST["apellidoP"];
		$apellidoM=$_POST["apellidoM"];
		$correo=$_POST["correo"];
		$contraseña=$_POST["contraseña"];
		$telefono=$_POST["telefono"];
		
		$usuario = "root"; 
		$password = "";   
		$servidor = "localhost"; 
		$basededatos ="inovadent"; 

		$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 

		$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");
		
		 $sql="INSERT INTO `cuenta_usuario`(`id_usuario`, `usuario`, `nombre`, `apellidoP`, `apellidoM`, `correo`, `contraseña`, `telefono`) VALUES ('','$usuario','$nombre','$apellidoP','$apellidoM','$correo','$contraseña','$telefono')";
		
		$ejecutar=mysqli_query($conexion, $sql);
		
		if(!$ejecutar){
        echo"<h2>huvo algun error<br> intente saber por que <br> ocurre el <br>
        error  dhaaa</h2>";
		require "C_cuenta.php";
		
    }
        else{
			header("Location:index.php");
			exit;
    }


		?>