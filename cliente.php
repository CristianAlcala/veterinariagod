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
          <a href="login.php">Regresar a inicio</a>
        </div>
    </nav>
  


<?php
include "conexion.php";

$nom = $_POST['nombre'];
$cc = $_POST['correo'];
$user = $_POST['usuario'];
$pass =  $_POST['pass'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuarios (NOMBRE, USUARIO, CLAVE, CORREO, TIPO, ROL, SUBROL)
VALUES ('$nom', '$user', '$pass', '$cc', '2' ,'Cliente', 'Cliente')";

echo "<section class='form-registrar'>";

if (mysqli_query($conn, $sql)) {
  echo "<h2>¡Cliente registrado satisfactoriamente!</h2>";
} else {
  echo "<h2>Error: </h2>" . $sql . "<br>" . mysqli_error($conn);
}

echo "<br><b>Nombre del cliente: </b>" . $nom ."<br>";
echo "<b>Correo del cliente: </b>". $cc ."<br>";
echo "<br><b>Usuario del cliente: </b>" . $user ."<br>";
echo "<br><b>Rol del cliente: </b>" . "Cliente" ."<br>";


echo "</section>";

mysqli_close($conn);
?>
</body>

</html>