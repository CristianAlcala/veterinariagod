<?php
session_start();
if (empty($_SESSION["id"]) && $_SESSION["id"]!=0){
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
          <a href="IndexAdmin.php">Regresar a inicio</a>
        </div>
    </nav>
  


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vet_v3";

$nom = $_POST['nombre'];
$esp = $_POST['especialidad'];
$cc = $_POST['correo'];
$user = $_POST['usuario'];
$pass =  $_POST['pass'];


// Create connection
$conn = /** @scrutinizer ignore-call */ mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuarios (NOMBRE, USUARIO, CLAVE, CORREO, TIPO, ROL, SUBROL)
VALUES ('$nom', '$user', '$pass', '$cc', '1' ,'Veterinario', '$esp')";

echo "<section class='form-registrar'>";

if (mysqli_query($conn, $sql)) {
  echo "<h2>¡Veterinario registrado satisfactoriamente!</h2>";
} else {
  echo "<h2>Error: </h2>" . $sql . "<br>" . mysqli_error($conn);
}

echo "<br><b>Nombre del veterinario: </b>" . $nom ."<br>";
echo "<b>Correo del veterinario: </b>". $cc ."<br>";
echo "<br><b>Usuario del veterinario: </b>" . $user ."<br>";
echo "<br><b>Rol Asignado: </b>" . "Veterinario - $esp" ."<br>";


echo "</section>";

mysqli_close($conn);
?>
</body>

</html>