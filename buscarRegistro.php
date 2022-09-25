<?php
session_start();
if (empty($_SESSION["id"])){
   header ("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

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


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Eliminar Registro</title>
</head>
<body>
    
<header>
        <img src="img/logo.png" alt="Logo Veterinaria">    
        

        <h1 class="titulo" style="text-align: center;">Veterinaria</h1>

            <nav>

                <div>
                <a href="registrarCliente.php">Registrar Cliente</a>
                <a href="index.php">Regresar Inicio</a>
                </div>
            </nav>

    </header>



    
    
    
    </section>
    <form action="eliminarRegistro.php" method="POST">
    <section class="form-registrar">

       

        <h4>Eliminar Registro </h4>

        <label for="idUsuario">Seleccione un usuario: </label>
        <select class="controls" id="idUsuario" name="idUsuario"> 	
            <?php
            include "conexion.php";
            
            $consulta = 'SELECT ID_USUARIO, NOMBRE from usuario';
            $consultar = mysqli_query($conn, $consulta);
            
            while($row = mysqli_fetch_array($consultar))
            {
                $matu= $row['ID_USUARIO'];
                $nomu=$row['NOMBRE'];
            ?>  
            <option value="<?php echo $matu; ?>"><?php echo $nomu; ?></option>  
                <?php           
            }
            ?>
        </select>

        <input class="botons" type="submit" value="Eliminar" onclick="return ConfirmDelete()">
        
    </section>
    </form>
        
    </section>

</body>
</html>