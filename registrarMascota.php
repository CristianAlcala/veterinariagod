<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Registrar Mascota</title>
</head>

<body background="img/perromanoseado.jpg">
    <header>
        <div class="content">
            <img src="img/patita.svg" alt="Logo Veterinaria">
            
            <nav>
                <a href="mascotabuscar.php">Regresar</a>
            </nav>
            <h1 style="text-align: center;">Veterinaria</h1>
            <div class="clearfix"></div>
        </div>
    </header>

    <form action="mascota.php" method="POST">
    <section class="form-registrar">
        <h4>Registrar Mascota </h4>
        <label for="usuario">Dueño de la mascota:</label>
        <select class="controls" id="usuario" name="usuario"> 	

            <?php
            include "conexion.php";
            
            $consulta = 'SELECT ID_USUARIO, NOMBRE from usuario';
            $consultar = mysqli_query($conn, $consulta);
            
            while($row = mysqli_fetch_array($consultar))
            {
                $id= $row['ID_USUARIO'];
                $nom=$row['NOMBRE'];
            ?>  
            <option value="<?php echo $id; ?>"><?php echo $nom; ?></option>  
                <?php           
            }
            ?>

        </select>
        
        
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

    <input class="controls" type="date" id="FechaNacimiento" name="FechaNacimiento" max="2021-12-31">

     <input class="botons"   type="submit" value="Registrar Mascota"><br><br>
     <input class="botons"   type="reset" value="Limpiar datos">
       
    </section>
    </form>

</body>

</html>