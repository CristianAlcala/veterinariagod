
<?php
session_start();
if (empty($_SESSION["id"])){
   header ("location: login.php");
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Registrar Cliente</title>
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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veterinaria";

$nom = $_POST['nomCliente'];
$cc = $_POST['correoCliente'];
$telc = $_POST['numCliente'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuario (CORREO, TELEFONO, NOMBRE)
VALUES ('$cc', '$telc', '$nom')";

echo "<section class='form-registrar'>";

if (mysqli_query($conn, $sql)) {
  echo "<h2>¡Cliente registrado satisfactoriamente!</h2>";
} else {
  echo "<h2>Error: </h2>" . $sql . "<br>" . mysqli_error($conn);
}

echo "<br><b>Nombre del cliente: </b>" . $nom ."<br>";
echo "<b>Correo del cliente: </b>". $cc ."<br>";
echo "<b>Telefono del cliente: </b>". $telc ."<br>";

echo "</section>";

mysqli_close($conn);
?>
</body>

</html>