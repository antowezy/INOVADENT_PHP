<?php
include "conexion.php";
session_start();
error_reporting(0);

if(isset($_SESSION["usuario"])){
  header ("Location:C_cuenta.php")
}
if(isset($_POST["submit"])){
  $correo=$_POST["correo"];
  $contrasenia=md5($_POST["contraseña"]);

  $sql="SELECT*FROM inovadent WHERE correo='$correo' AND contraseña='$contrasenia'";
  $resultado=mysqli_query($conexion,$sql);
  if($resultado->num_rows>0){
    $row=mysqli_fetch_assoc($resultado);
    $_SESSION['usuario']=$row['usuario'];
    header("Location: C_cuenta.php")
  }else{
    echo"<script>alert('La contraseña o el email son incorrectos ')<script>";
  }
}

?>