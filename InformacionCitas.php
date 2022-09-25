<?php
session_start();
if (empty($_SESSION["id"])){
   header ("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Citas Pendientes</title>
</head>

<body>
<header>
        <img src="img/logo.png" alt="Logo Veterinaria">    
        

        <h1 class="titulo" style="text-align: center;">Veterinaria</h1>

            <nav>

                <div>
                    <a href="index.php">Regresar a inicio</a>
                </div>
            </nav>

</header>

    <?php 
    include "conexion.php";
    ?>
    <table class="controls" border="1" >
        <br>
        <tr>
            <th colspan="7">CITAS PENDIENTES</th>
        </tr>

        <tr>
            <td><b>FECHA</b></td>
            <td><b>HORA</b></td>
            <td><b>DESCRIPCIÓN</b></td>
            <td><b>DUEÑO</b></td>
            <td><b>MASCOTA</b></td>
            <td><b>VETERINARIO</b></td>
            <td><b>ESPECIALIDAD</b></td>

        </tr>

        <?php
            $consulta = "SELECT cita.FECHA, cita.HORA, cita.DESCRIPCION, mascota.NOMBRE as MASCOTA, usuario.NOMBRE as DUEÑO, veterinario.NOMBRE, veterinario.APELLIDO, veterinario.ESPECIALIDAD
            FROM cita INNER JOIN mascota on cita.ID_MASCOTA = mascota.ID_MASCOTA
            INNER JOIN usuario on cita.ID_USUARIO  = usuario.ID_USUARIO
            INNER JOIN veterinario on cita.MATRICULA = veterinario.MATRICULA   
            where  cita.FECHA > CURRENT_DATE
            order by FECHA DESC LIMIT 25";
            $consultar = mysqli_query($conn, $consulta);
            while($row = mysqli_fetch_array($consultar)){
        ?>

        <tr>
            <td><?php echo $row['FECHA']?></td>
            <td><?php echo $row['HORA']?></td>
            <td><?php echo $row['DESCRIPCION']?></td>
            <td><?php echo $row['DUEÑO']?></td>
            <td><?php echo $row['MASCOTA']?></td>
            <td><?php echo $row['NOMBRE'].' '.$row['APELLIDO']?></td>
            <td><?php echo $row['ESPECIALIDAD']?></td> 
        </tr>
        <?php
            }
        ?>        
    </table>
    <br>
    
    <table class="controls" border="1" >

    <tr>
        <th colspan="7">CITAS EXPIRADAS</th>
    </tr>

    <tr>
            <td><b>FECHA</b></td>
            <td><b>HORA</b></td>
            <td><b>DESCRIPCIÓN</b></td>
            <td><b>DUEÑO</b></td>
            <td><b>MASCOTA</b></td>
            <td><b>VETERINARIO</b></td>
            <td><b>ESPECIALIDAD</b></td>

    </tr>

    <?php
            $consulta = "SELECT cita.FECHA, cita.HORA, cita.DESCRIPCION, mascota.NOMBRE as MASCOTA, usuario.NOMBRE as DUEÑO, veterinario.NOMBRE, veterinario.APELLIDO, veterinario.ESPECIALIDAD
            FROM cita INNER JOIN mascota on cita.ID_MASCOTA = mascota.ID_MASCOTA
            INNER JOIN usuario on cita.ID_USUARIO  = usuario.ID_USUARIO
            INNER JOIN veterinario on cita.MATRICULA = veterinario.MATRICULA   
            where  cita.FECHA < CURRENT_DATE
            order by FECHA DESC LIMIT 25";
            $consultar = mysqli_query($conn, $consulta);
            while($row = mysqli_fetch_array($consultar)){
        ?>

        <tr>
            <td><?php echo $row['FECHA']?></td>
            <td><?php echo $row['HORA']?></td>
            <td><?php echo $row['DESCRIPCION']?></td>
            <td><?php echo $row['DUEÑO']?></td>
            <td><?php echo $row['MASCOTA']?></td>
            <td><?php echo $row['NOMBRE'].' '.$row['APELLIDO']?></td>
            <td><?php echo $row['ESPECIALIDAD']?></td> 
        </tr>
        <?php
            }
        ?>        


    </table>

</body>

</html>