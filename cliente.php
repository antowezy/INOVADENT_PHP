<!DOCTYPE html>
<html lang="es">
    <head>
        
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <title>
            Admin
        </title>
    </head>
    <body>
        <ul class="nav justify-content-end">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Proveedores</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">consultas</a>
            </li>
    <li class="nav-item">
        <a  href="cerrar.php">Cerrar sesion</a>
    </li>
    </ul>
        <table>
            <tr>
                <td>    ID  </td>
                <td>    Apellido    </td>
                <td>    Nombre  </td>
                <td>    Correo  </td>
                <td>    No. telefono    </td>
            </tr>
        <?php

		include("conexion.php");
		$link=conectarse();

        if ($link){
        $consulta3="SELECT * FROM usuario_de_sistemas";
        $resultado=mysqli_query($link, $consulta3);
            if($resultado){
                while($row=$resultado->fetch_array()){
                    $Id=$row["id_usuario"];
                    $nombre=$row["nombre"];
                    $apellido=$row["apellido"];
                    $correo=$row["correo"];
                    $telefono=$row['telefono'];
                    ?>
      
            <tr>
                <td>> <?php echo $Id; ?> </td>
                <td><?php echo $apellido; ?> </td>
                <td><?php echo $nombre; ?> </td>
                <td><?php echo $correo; ?> </td>
                <td><?php echo $telefono; ?> </td>
                
            </tr>
        </table>
                
                <?php
                }

           
            }
         }
    ?>
       
    </body>
</html>