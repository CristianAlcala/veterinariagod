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
    <title>PAWS</title>
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
            <?php 
            echo "<p style='color:white; font-weight: bold; display:inline;'>". $_SESSION["nombre"]. "&nbsp;</p>";
            ?>
                <a href="registrarVeterinarios.php">Registrar Veterinarios</a>
                <a href="eliminarClientes.php">Eliminar Usuarios</a>
                <a href="controlador/controlador_cerrar_session.php">Cerrar Sesión</a>
        </div>
    </nav>


    <section class="form-registrar" style="width: 700px; align-items: center; text-align: center;" >
        <img src="img/imagen.jpg" alt="" style="border: 10px;"><br>
        <br>
        <h1>Descripción</h1>
        En esta veterinaria estamos comprometidos con tus mascotas, utiliza nuestro sistema para llevar control sobre tus citas, mascotas y clientes.

    </section>

</body>
</html>