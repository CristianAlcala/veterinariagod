<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Mascota</title>
</head>
<body>
    
    <header>
        <div class="content">
            <img src="img/patita.svg" alt="Logo Veterinaria">
            
            <nav>
                <a href="index.html">Regresar Inicio</a>
                
            
            </nav>
            <h1 style="text-align: center;">Veterinaria</h1>
            <div class="clearfix"></div>
        </div>
    </header>



    <section class="form-registrar">
    <h4>¿No tienes una mascota registrada?</h4>
    <button class="per" id="registrar" name="registrar" onclick="window.location.href='registrarMascota.php'">Registrar una Mascota</button>
    
    </section>
    <form action="seleccionarMascota.php" method="POST">
    <section class="form-registrar">

       

        <h4>Actualizar Mascota </h4>

        <label for="mascota">Selecciona una mascota: </label>
        <select class="controls" id="idMascota" name="idMascota"> 	
            <?php
            include "conexion.php";
            
            $consulta = 'SELECT ID_MASCOTA, NOMBRE from mascota';
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

        <input class="botons" type="submit" value="Buscar">
        
    </section>
    </form>
        
    </section>

</body>
</html>