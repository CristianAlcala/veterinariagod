<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Actualizar Mascota</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vet_v3";
    
$mas = $_POST['ID_MASCOTA'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "SELECT ID_MASCOTA, NOMBRE, ESPECIE, RAZA, FECHA_NACIMIENTO FROM mascota WHERE ID_MASCOTA = $mas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $nom = $row["NOMBRE"];
    $esp = $row["ESPECIE"];
    $raz = $row["RAZA"];
    $nac = $row["FECHA_NACIMIENTO"];
  }
} else {
  echo "0 resultados";
}

mysqli_close($conn);
?>
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
          <a href="indexClientes.php">Regresar a inicio</a>
        </div>
    </nav>

    <form action="actualizarMascota.php" method="POST">
    <section class="form-registrar">
        <h4>Actualizar Mascota </h4>
        
        <input class="controls" type="text" name="nomMascota" id="nomMascota" placeholder="Escribe el nombre de la Mascota" value='<?php echo $nom; ?>' required> 
        <input class="controls" type="text" name="raza" id="raza" placeholder="Escribe la Raza" value='<?php echo $raz; ?>' required>
    
    <h4 style="margin-bottom: 5px;">Estado:</h4>
    <label for="idAlta">Recuperación:</label>
    <input type="radio" id="idAlta" value="Recuperación" name="estado" required> <br>
    <label for="idBaja">Libre:</label> 
    <input type="radio" id="idBaja" value="Libre" name="estado" > <br><br>
     
    <label for="FechaNacimiento">Fecha de Nacimiento</label>

    <input class="controls" type="date" id="FechaNacimiento" name="FechaNacimiento" value='<?php echo $nac; ?>'>
    <input class="controls" type='number' readonly hidden id='idmas' name='idmas' value='<?php echo $mas; ?>'><br><br>

     <input class="botons"   type="submit" value="Actualizar Mascota">
       
    </section>
    </form>

</body>

</html>