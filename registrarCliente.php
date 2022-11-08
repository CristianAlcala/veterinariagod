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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Registrar cliente</title>
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
            <a href="clienteBuscar.php">Modificar Cliente</a>
            <a href="index.php">Regresar a inicio</a>
            <a href="buscarRegistro.php">Eliminar Registro</a>

        </div>
    </nav>


    <form action="cliente.php" method="POST">
    <section class="form-registrar">
        <h4>Registrar Cliente </h4>
        <input class="controls" type="text" name="nomCliente" id="nomCliente" placeholder="Escribe el nombre del cliente" required> 
        <input class="controls" type="email" name="correoCliente" id="correoCliente" placeholder="Nombre de usuario  @correo.com " required size="25">
        <input class="controls" type="tel" name="numCliente" id="numCliente" placeholder="Numero de teléfono del cliente" required size="25"> <br>
        <input class="botons"   type="submit" value="Registrar"><br><br>
        <input class="botons"   type="reset" value="Limpiar datos">
       
    </section>

    </form>



</body>

</html>