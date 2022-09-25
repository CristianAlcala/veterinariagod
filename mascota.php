<html>

<html>

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
          <a href="indexClientes.php">Regresar a inicio</a>
        </div>
    </nav>
                
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";

$us = $_POST['usuario'];
$nomm = $_POST['nomMascota'];
$raz = $_POST['raza'];
$esp = $_POST['especie'];
$est = $_POST['estado'];
$nac = $_POST['FechaNacimiento'];



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mascota (NOMBRE, ESPECIE, RAZA, ESTADO, FECHA_NACIMIENTO, ID_USUARIO)
VALUES ('$nomm', '$esp', '$raz', '$est', '$nac', '$us')";

echo "<section class='form-registrar' style='width: 600px;'>";

if (mysqli_query($conn, $sql)) {
  echo "<h2>Mascota registrada satisfactoriamente!</h2>";
} else {
  echo "<h2>Error: </h2>" . $sql . "<br>" . mysqli_error($conn);
}

echo "<br><b>Dueño: </b>". $us ."<br>";
echo "<b>Nombre de la mascota: </b>". $nomm ."<br>";
echo "<b>Raza de la mascota: </b>". $raz ."<br>";
echo "<b>Especie de la mascota: </b>". $esp ."<br>";
echo "<b>Estado de la mascota: </b>". $est ."<br>";
echo "<b>Fecha de nacimiento de la mascota: </b>". $nac ."<br>";

echo "</section>";

mysqli_close($conn);
?>
</body>

</html>