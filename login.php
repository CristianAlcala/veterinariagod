<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Login</title>
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
            <a href="registrarCliente.php">Registrarse</a>  
        </div>
    </nav>

    <form action="" method="POST">
        <section class="form-registrar2">
            <?php
            include "modelo/conexionLogin.php";
            include "controlador/controlador_login.php";
            ?>
           <br> Inicio de sesión <br>
            <br> Usuario<input class="controls" type="text" id="lusuario" name="Nusuario" ><br>
            <br>Contraseña<input class="controls" type="password" id="pass" name="Npassword"  ><br>

            <input class="botons" type="submit" value="Ingresar" name='btningresar' >
            
    
        
        </section>
    </form>

</body>

</html>