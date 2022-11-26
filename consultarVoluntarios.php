<?php
    include "modelo/conexionLogin.php";
    include "controlador/controlador_login.php";
    $idd =  $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Veterinarios Voluntarios</title>
</head>

<body>
<header>
        <div class="himagen">
            <img src="img/logo.png" alt="Logo Veterinaria">
        </div>

        <div class="htitulo">
            <h1>Veterinaria</h1>
        </div>
    </header>


    <nav>
        <div class="barra">
           
            <a href="mascotabuscar.php">Mascotas</a>
            <a href="registrarCita.php">Registrar cita</a>
            <a href= "indexClientes.php">Regresar inicio</a>
           
            
        </div>     

    </nav>

    <?php 
    include "conexion.php";
    ?>
    <table class="controls" border="1" >
        <tr>
            <td><b>ID Veterinario Voluntario</b></td>
            <td><b>NOMBRE</b></td>
            <td><b>CORREO</b></td>
            <td><b>SUBROL</b></td>
            <td><b>TEL</b></td>
        </tr>

        <?php
               
            $consulta = "SELECT id_voluntario, nombre, correo, subrol, tel FROM voluntarios";
            $consultar = mysqli_query($conn, $consulta);
            while($row = mysqli_fetch_array(/** @scrutinizer ignore-type */ $consultar)){
        ?>

        <tr>
            <td><?php echo $row['id_voluntario']?></td>
            <td><?php echo $row['nombre']?></td>
            <td><?php echo $row['correo']?></td>
            <td><?php echo $row['subrol']?></td>
            <td><?php echo $row['tel']?></td>
        </tr>
        <?php
            }
        
    
        ?>        
    </table>



</body>

</html>