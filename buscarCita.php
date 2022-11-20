<?php
    include "modelo/conexionLogin.php";
    include "controlador/controlador_login.php";
    $idd =  $_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">

<script type="text/javascript">
    function ConfirmDelete()
    {
      var respuesta = confirm("¿Estás seguro que deseas eliminar la cita?");

      if(respuesta == true)
      {
        return true;
      }
      else
      {
          return false;
      }
    
    }

</script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Eliminar Cita</title>
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
          <a href="indexAdmin.php">Regresar a inicio</a>
        </div>
    </nav>

    <form action="eliminarCita.php" method="POST">
        <section class="form-registrar2">
            <h4>Eliminar Cita</h4>     

            <label for="seleccion">Selecciona una cita: </label>
            <select class="controls" id="seleccion" name="seleccion" required>
            <option disabled selected>Selecciona una opción</option>
                <?php
                    include "conexion.php";
                    
                    $consulta = 'SELECT c.id_cita, c.fecha, c.ID_USUARIO,c.MASCOTA_ID_MASCOTA, u.USUARIO, m.NOMBRE
                    FROM cita C, usuarios U, mascota M WHERE U.ID_USUARIOS=C.ID_USUARIO and m.ID_MASCOTA=C.MASCOTA_ID_MASCOTA;';
                    $consultar = mysqli_query($conn, $consulta);
                    
                    while($row = mysqli_fetch_array(/** @scrutinizer ignore-type */ $consultar))
                    {
                        $idCita= $row['id_cita'];
                        $fecha=$row['fecha'];
                        $nombreUsuario=$row['USUARIO'];
                        $nombreMascota=$row['NOMBRE'];
                    ?> 
                
                <option value="<?php echo $idCita; ?>"><?php echo $fecha." - ".$nombreUsuario." - ".$nombreMascota; ?></option>  
                <?php           
                }
                
                ?>

            </select>

            <input class="botons" type="submit" value="Cancelar Cita" onclick="return ConfirmDelete()">       
        
        </section>
    </form>

</body>

</html>