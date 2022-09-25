
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Registrar Cita</title>
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
          <a href="indexClientes.php">Regresar a inicio</a>
        </div>
    </nav>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";
    
$idmas = $_POST['idmas'];
$nom = $_POST['nomMascota'];
$raz = $_POST['raza'];
$est = $_POST['estado'];
$fec = $_POST['FechaNacimiento'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE mascota
SET NOMBRE = '$nom', RAZA='$raz', ESTADO='$est', FECHA_NACIMIENTO='$fec'
WHERE ID_MASCOTA=$idmas";

echo "<section class='form-registrar' style='width: 600px;'>";

if (mysqli_query($conn, $sql)) {
	echo " <h2>¡El registro se ha actualizado!</h2>";
} else {
  echo " <h2>El registro no ha sido actualizado.</h2>" . mysqli_error($conn);
  
}	

echo "<br><b>ID Mascota: </b>". $idmas ."<br>";
echo "<b>Nombre de la mascota: </b>". $nom ."<br>";
echo "<b>Raza de la mascota: </b>". $raz ."<br>";
echo "<b>Estado de la mascota: </b>". $est ."<br>";
echo "<b>Fecha de nacimiento de la mascota: </b>". $fec ."<br>";


echo "</section>";

mysqli_close($conn);
?>


</body>
</html>