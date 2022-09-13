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
        <div class="content">
            <img src="img/patita.svg" alt="Logo Veterinaria">
            
            <nav>
                <a href="registrarCliente.html">Registrar Cliente</a>
                <a href="index.html">Regresar Inicio</a>
                
                
            
            </nav>
            <h1 style="text-align: center;">Veterinaria</h1>
            <div class="clearfix"></div>
        </div>
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