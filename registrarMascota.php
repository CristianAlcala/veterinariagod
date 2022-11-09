<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Registrar Mascota</title>
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
            <a href="mascotabuscar.php">Regresar</a>
        </div>
    </nav>


    <form action="mascota.php" method="POST">
    <section class="form-registrar">
        <h4>Registrar Mascota </h4>  
        
        <input class="controls" type="text" name="nomMascota" id="nomMascota" placeholder="Escribe el nombre de la Mascota" required> 
        <input class="controls" type="text" name="raza" id="raza" placeholder="Escribe la Raza" required>

    <label for="especie">¿Qué especie es?</label>
    <select class="controls" id="especie" name="especie"> 	
    <option value="Perro">Perro</option>
    <option value="Gato">Gato</option>
    <option value="Pez">Pez</option>
    <option value="Hamster">Hamster</option>
    </select>
    
    <h4 style="margin-bottom: 5px;">Estado:</h4>
    <label for="idAlta">Recuperación:</label>
    <input type="radio" id="idAlta" value="Recuperación" name="estado" required> <br>
    <label for="idBaja">Libre:</label> 
    <input type="radio" id="idBaja" value="Libre" name="estado"> <br><br>
     
    <label for="FechaNacimiento">Fecha de Nacimiento</label>

    <input class="controls" type="date" id="FechaNacimiento" name="FechaNacimiento" >

     <input class="botons"   type="submit" value="Registrar Mascota"><br><br>
     <input class="botons"   type="reset" value="Limpiar datos">
       
    </section>
    </form>

</body>

</html>