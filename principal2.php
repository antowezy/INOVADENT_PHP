<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header ("Location:iniciarsesion.php");
}
?>
<h1>
    bienvenido has iniciado sesion :D
</h1>
<?php include  "includes1/head1.php";?>
<?php include "includes1/nav1.php";?>
<?php include "includes1/header1.php";?>
<?php include "includes1/toucheader1.php";?>
<?php include "includes1/aboutsection1.php";?>
<?php include "includes1/servicessection1.php";?>
<?php include "includes1/gallerysection1.php";?>
<?php include "includes1/testimonialsection1.php";?>
<?php include "includes1/contactsection1.php";?>
<?php include "includes1/footer1.php";?>