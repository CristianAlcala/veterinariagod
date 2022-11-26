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
    <title>Registrar Diagnostico</title>
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

<?php
 include "conexion.php";

$idCita = $_POST['idCita'];
$descripcion = $_POST['desc'];


// Create connection
$conn = /** @scrutinizer ignore-call */ mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO diagnostico (descripcion, id_cita)
VALUES ('$descripcion', '$idCita')";

echo "<section class='form-registrar'>";

if (mysqli_query($conn, $sql)) {
  echo "<h2>¡Diagnostico registrado satisfactoriamente!</h2>";
} else {
  echo "<h2>Error: </h2>" . $sql . "<br>" . mysqli_error($conn);
}

echo "<br><b>ID Cita: </b>" . $idCita .  "<br>" .
"<b>Descripcion: </b>" .  $descripcion . "<br>" ."</section>";

mysqli_close($conn);
?>
</body>

</html>