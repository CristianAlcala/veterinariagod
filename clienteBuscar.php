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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Cliente</title>
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
             <a href="index.php">Regresar Inicio</a>
        </div>
    </nav>
               

   
    <form action="clienteSeleccionar.php" method="POST">
    <section class="form-registrar">

       

        <h4>Actualizar Cliente </h4>

        <label for="cliente">Selecciona un cliente: </label>
        <select class="controls" id="idCliente" name="idCliente"> 	
            <?php
            include "conexion.php";
            
            $consulta = 'SELECT ID_USUARIO, NOMBRE from usuario';
            $consultar = mysqli_query($conn, $consulta);
            
            while($row = mysqli_fetch_array($consultar))
            {
                $mat= $row['ID_USUARIO'];
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