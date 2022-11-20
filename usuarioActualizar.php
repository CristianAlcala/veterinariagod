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
    <title>Usuario Actualizar</title>
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
          <a href="indexAdmin.php">Regresar a inicio</a>
        </div>
    </nav>


<?php
include "conexion.php";

    $iduser = $_POST['iduser'];
    $nom = $_POST["Nnombre"];
    $usuario = $_POST ["Nusuario"];
    $corr = $_POST["Ncorreo"];
    $subrol= $_POST["Nsubrol"];

// Create connection
$conn = /** @scrutinizer ignore-call */ mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "UPDATE usuarios
SET CORREO = '$corr', NOMBRE='$nom', USUARIO='$usuario', SUBROL='$subrol'
WHERE ID_USUARIOS=$iduser";

echo "<section class='form-registrar' style='width: 600px;'>";

if (mysqli_query($conn, $sql)) {
	echo " <h2>¡El registro se ha actualizado!</h2>";
} else {
  echo " <h2>El registro no ha sido actualizado.</h2>" . mysqli_error($conn);
  
}	

echo "<br><b>ID Usuario: </b>". $iduser ."<br>";
echo "<b>Nombre del Usuario: </b>". $nom ."<br>";
echo "<b>Correo del Usuario: </b>". $corr ."<br>";
echo "<b>Subrol del usuario: </b>". $subrol ."<br>";


echo "</section>";

mysqli_close($conn);
?>


</body>
</html>