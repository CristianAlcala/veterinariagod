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
            <a href="indexAdmin.php">Volver al Inicio</a>
        </div>
    </nav>

    <form action="veterinario.php" method="POST">
    <section class="form-registrar">
        <h4>Formulario de Registro </h4>
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
        <input class="controls" type="text" name="usuario" id="usuario" placeholder="Usuario" required> 
        <input class="controls" type="text" name="especialidad" id="especialidad" placeholder="Especialidad" required> 
        <input class="controls" type="email" name="correo" id="correo" placeholder="Correo Electronico" required size="25">
        <input class="controls" type="password" name="pass" id="pass" placeholder="Contraseña" required size="25"> <br>
        <input class="botons"   type="submit" value="Registrarse"><br><br>
        <input class="botons"   type="reset" value="Limpiar datos">
       
    </section>

    </form>



</body>

</html>