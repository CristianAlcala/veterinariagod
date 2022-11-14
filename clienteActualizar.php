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
    <title>Cliente Actualizar</title>
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
    
$iduser = $_POST['iduser'];
$nom = $_POST['Nnombre'];
$corr = $_POST['Ncorreo'];
$tel = $_POST['Ntelefono'];

// Create connection
$conn = /** @scrutinizer ignore-call */ mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE usuario
SET CORREO = '$corr', TELEFONO='$tel', NOMBRE='$nom'
WHERE ID_USUARIO=$iduser";

echo "<section class='form-registrar' style='width: 600px;'>";

if (mysqli_query($conn, $sql)) {
	echo " <h2>¡El registro se ha actualizado!</h2>";
} else {
  echo " <h2>El registro no ha sido actualizado.</h2>" . mysqli_error($conn);
  
}	

echo "<br><b>ID Cliente: </b>". $iduser ."<br>";
echo "<b>Nombre del cliente: </b>". $nom ."<br>";
echo "<b>Correo del cliente: </b>". $corr ."<br>";
echo "<b>teléfono del cliente: </b>". $tel ."<br>";


echo "</section>";

mysqli_close($conn);
?>


</body>
</html>