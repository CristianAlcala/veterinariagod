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
      var respuesta = confirm("¿Estás seguro que deseas eliminar al usuario?");

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
          <a href="indexAdmin.php">Regresar a inicio</a>
        </div>
    </nav>

    <form action="eliminarRegistro.php" method="POST">
        <section class="form-registrar2">
            <h4>Eliminar Usuarios</h4>     

            <label for="seleccion">Selecciona un Usuario: </label>
            <select class="controls" id="seleccion" name="seleccion" required>
            <option disabled selected readonly>Selecciona una opción</option>
                <?php
                    include "conexion.php";
                    
                    $consulta = 'SELECT ID_USUARIOS, ROL, SUBROL, NOMBRE from USUARIOS where NOT TIPO = 0';
                    $consultar = mysqli_query($conn, $consulta);
                    
                    
                    while($row = mysqli_fetch_array(/** @scrutinizer ignore-type */ $consultar))
                    {
                        $mat= $row['ID_USUARIOS'];
                        $esp=$row['SUBROL'];
                        $nom=$row['NOMBRE'];
                        $id=$row['ID_USUARIOS'];
                    ?> 
                
                <option value="<?php echo $mat; ?>"><?php echo $id." - ".$nom." - ".$esp; ?></option>  
                <?php           
                }
                
                ?>

            </select>

            <input class="botons" type="submit" value="Eliminar" onclick="return ConfirmDelete()">       
        
        </section>
    </form>

</body>

</html>