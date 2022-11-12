<?php
    include "modelo/conexionLogin.php";
    include "controlador/controlador_login.php";
    $idd =  $_SESSION["id"];
?>
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
$dbname = "vet_v3";

$mas = $_POST['mascota'];
$fc = $_POST['fechaCita'];
$hr = $_POST['horacita'];
$desc = $_POST['desc'];
$idv = $_POST['vet'];
//$idv = 7;
echo $idv;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO cita (FECHA, HORA, DESCRIPCION, MASCOTA_ID_MASCOTA, MATRICULA, ID_USUARIO)
VALUES ('$fc', '$hr', '$desc', '$mas', '$idv', '$idd')";

echo "<section class='form-registrar'>";

if (mysqli_query($conn, $sql)) {
  echo "<h2>¡Cita registrada satisfactoriamente!</h2>";
} else {
  echo "<h2>Error: </h2>" . $sql . "<br>" . mysqli_error($conn);
}

echo "<br><b>Veterinario: </b>" . $idv .  "<br>" .
"<b>Mascota: </b>" .  $mas . "<br>" .
"<b>Fecha de la cita: </b>" .  $fc . "<br>" .
"<b>Hora de la cita: </b>" .  $hr . "<br>" .
"<b>Descripción: </b>" . $desc . "<br>"  . "</section>";

mysqli_close($conn);
?>
</body>

</html>