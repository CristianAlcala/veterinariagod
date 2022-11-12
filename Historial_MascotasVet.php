<?php
session_start();
if (empty($_SESSION["id"])){
   header ("location: login.php");
}

$idd = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Historial mascotas</title>
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

                <a href= "index.php">Regresar inicio</a>
        </div>     
            <form method="POST" action="Historial_MascotasVet.php">
                <input type="text"
                    placeholder="Nombre de la mascota"
                    name="buscarm" id="buscarm">
                <input type="submit" value="Buscar">
            </form>
    </nav>

    <?php 
    include "conexion.php";
    ?>
    <table class="controls" border="1" >
        <tr>
            <td><b>NOMBRE MASCOTA</b></td>
            <td><b>ESPECIE</b></td>
            <td><b>RAZA</b></td>
            <td><b>DESCRIPCION</b></td>
            <td><b>FECHA</b></td>
            <td><b>HORA</b></td>
            <td><b>CLAVE CITA</b></td>
            <td>Editar</td>

        </tr>

        <?php
           if(isset($_POST['buscarm'])){
            $nm = $_POST['buscarm'];
            
            $consulta = "SELECT mascota.NOMBRE, mascota.ESPECIE, mascota.RAZA, cita.DESCRIPCION, cita.FECHA, cita.HORA, cita.ID_CITA
             FROM cita INNER JOIN mascota ON cita.MASCOTA_ID_MASCOTA = mascota.ID_MASCOTA WHERE cita.MATRICULA = '$idd' AND mascota.NOMBRE LIKE '". $nm ."%'";
            $consultar = mysqli_query($conn, $consulta);
            while($row = mysqli_fetch_array($consultar)){
        ?>

        <tr>
          
            <td><?php echo $row['NOMBRE']?></td>
            <td><?php echo $row['ESPECIE']?></td>
            <td><?php echo $row['RAZA']?></td>
            <td><?php echo $row['DESCRIPCION']?></td>
            <td><?php echo $row['FECHA']?></td>
            <td><?php echo $row['HORA']?></td>
            <td><?php echo $row['ID_CITA']?></td> 
            <td><html><form action="citaDetalle.php"><input class="botons" type="submit"></form></html></td>
        </tr>
        <?php
            }
        }
    
        ?>        
    </table>



</body>

</html>