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
    <title>Eliminar Registro</title>
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
          <a href="indexAdmin.php">Regresar Inicio</a>
        </div>
    </nav>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vet_v3";
$matricu=$_POST["seleccion"];


// Create connection
$conn = /** @scrutinizer ignore-call */ mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql ="DELETE from usuarios  WHERE ID_USUARIOS ='$matricu'";

echo "<section class='form-registrar' style='width: 600px;'>";
if (mysqli_query($conn, $sql)) {
    
	echo " <h2>¡Registro Eliminado Exitosamente!</h2>";
    
    
} else {
  echo "<h2>El usuario no existe.</h2>" . mysqli_error($conn);
}	

mysqli_close($conn);
?>
<img src="img/palomita.png" alt="Palomita" width="30" height="30" >

</body>

</html>