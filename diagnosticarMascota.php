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
    <title>Diagnosticar Mascota</title>
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
        <div>
          <a href="index.php">Regresar a inicio</a>
        </div>
    </nav>

    <form action="realizarDiagnostico.php" method="POST">
        <section class="form-registrar2">
            <h4>Diagnosticar Mascota </h4>     

            <label for="vet">Selecciona una cita: </label>
            <select class="controls" id="vet" name="vet" required>
            <option disabled selected>Selecciona una opción</option>
                <?php
                    include "conexion.php";
                    
                    $consulta = "SELECT mascota.NOMBRE, mascota.ESPECIE, mascota.RAZA, cita.DESCRIPCION, cita.FECHA, cita.HORA, cita.ID_CITA
                    FROM cita INNER JOIN mascota ON cita.MASCOTA_ID_MASCOTA = mascota.ID_MASCOTA WHERE cita.MATRICULA = '$idd'";
                    $consultar = mysqli_query($conn, $consulta);
                    
                    
                    while($row = mysqli_fetch_array(/** @scrutinizer ignore-type */ $consultar))
                    {
                        $fecha=$row['FECHA'];
                        $nombreMascota=$row['NOMBRE'];
                        $hora=$row['HORA'];
                        $idCita=$row['ID_CITA'];
                    ?> 
                
                <option value="<?php echo $idCita; ?>"><?php echo $fecha." - ".$hora." - ".$nombreMascota; ?></option>  
                <?php           
                }
                
                ?>

            </select>


            <input class="botons" type="submit" value="Diagnosticar Mascota">       
        
        </section>
    </form>

</body>

</html>