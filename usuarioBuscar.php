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
    <title>Usuario</title>
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
             <a href="indexAdmin.php">Regresar Inicio</a>
        </div>
    </nav>



    <form action="usuarioSeleccionar.php" method="POST">
    <section class="form-registrar">



        <h4>Actualizar Cliente </h4>

        <label for="usuario">Selecciona un usuario: </label>
        <select class="controls" id="ID_USUARIOS" name="ID_USUARIOS"> 	
            <?php
            include "conexion.php";

            $consulta = "SELECT ID_USUARIOS, NOMBRE, CORREO, SUBROL from usuarios where not TIPO ='0'";
            


            $consultar = mysqli_query($conn, $consulta);

            while($row = mysqli_fetch_array($consultar))
            {
                $mat= $row['ID_USUARIOS'];
                $nom=$row['NOMBRE'];
                $esp=$row['SUBROL'];
            ?>  
            <option value="<?php echo $mat; ?>"><?php echo $mat." - "; ?><?php echo $nom; ?><?php echo " - ".$esp; ?> </option>  
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