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
    <title>Registrar Cita</title>
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
          <a href="indexClientes.php">Regresar a inicio</a>
        </div>
    </nav>

    <form action="cita.php" method="POST">
        <section class="form-registrar2">
            <h4>Registrar Cita </h4>     

            <label for="vet">Selecciona un veterinario: </label>
            <select class="controls" id="vet" name="vet" required>
            <option disabled selected>Selecciona una opción</option>
                <?php
                    include "conexion.php";
                    
                    $consulta = 'SELECT ID_USUARIOS, SUBROL, NOMBRE from USUARIOS WHERE TIPO = 1';
                    $consultar = mysqli_query($conn, $consulta);
                    
                    
                    while($row = mysqli_fetch_array(/** @scrutinizer ignore-type */ $consultar))
                    {
                        $mat=$row['ID_USUARIOS'];
                        $esp=$row['SUBROL'];
                        $nom=$row['NOMBRE'];
                    ?> 
                
                <option value="<?php echo $mat; ?>"><?php echo $nom." - ".$esp; ?></option>  
                <?php           
                }
                
                ?>

            </select>

            <label for="mascota">Selecciona una mascota: </label>
            <select class="controls" id="mascota" name="mascota" required> 	
            <?php
            include "conexion.php";
            
            $consulta = "SELECT ID_MASCOTA, NOMBRE from mascota where ID_DUEÑO = '$idd' ";
            $consultar = mysqli_query($conn, $consulta);
            
            while($row = mysqli_fetch_array($consultar))
            {
                $mat= $row['ID_MASCOTA'];
                $nom=$row['NOMBRE'];
            ?>  
            
            <option value="<?php echo $mat; ?>"><?php echo $nom; ?></option>  
                <?php           
            }
            ?>
                </select>
            
            <label for="fechaCita">Día de la cita:</label>
            <input class="controls" type="date" id="fechaCita" name="fechaCita" min="2022-08-29" max="2022-12-31" required><br>

            <label for="horacita">Hora de la Cita (entre 12pm y 8pm):</label>
            <input class="controls" type="time" id="horacita" name="horacita" min="12:00" max="20:00" required><br>

            <label for="desc">Descripción</label>
            <textarea class="controls" id="desc" name="desc" maxlength="200" minlength="10" rows="4" cols="50" required></textarea>

            <input class="botons" type="submit" value="Registrar Cita">       
        
        </section>
    </form>

</body>

</html>