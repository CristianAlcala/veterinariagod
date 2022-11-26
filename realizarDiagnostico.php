<?php
    include "modelo/conexionLogin.php";
    include "controlador/controlador_login.php";
    $idd =  $_SESSION["id"];

    $idCita = $_POST['vet'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Diagnosticar</title>
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
          <a href="index.php">Regresar a inicio</a>
        </div>
    </nav>

    <form action="envioDiagnostico.php" method="POST">
        <section class="form-registrar2">
            <h4>Diagnosticar</h4><br>    
        
            <label for="desc">Descripción</label>
            <textarea class="controls" id="desc" name="desc" maxlength="200" minlength="10" rows="4" cols="50" required></textarea>
            <input type="hidden" id="idCita" name="idCita" value="<?php echo $idCita; ?>">

            <input class="botons" type="submit" value="Enviar diagnostico">    
        
        </section>
    </form>

</body>

</html>