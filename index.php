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
         echo $_SESSION["nombre"]. " ".$_SESSION["apellido"];
         ?>
            <a href="registrarCliente.php">Registrar cliente</a>
            <a href="InformacionCitas.php">Citas</a>
            <a href="Historial_MascotasVet.php">Historial Mascotas (WIP)</a>
            <a href="controlador/controlador_cerrar_session.php">Salir</a>

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