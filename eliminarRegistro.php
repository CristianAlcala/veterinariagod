<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Eliminar Registro</title>
</head>

<body background="img/perromanoseado.jpg">

<header>
        <div class="content">
            <img src="img/patita.svg" alt="Logo Veterinaria">
            
            <nav>
                <a href="registrarCliente.html">Registrar Cliente</a>
                <a href="index.html">Regresar a inicio</a>
            </nav>
            <h1 style="text-align: center;">Veterinaria</h1>
            <div class="clearfix"></div>
        </div>
    </header>

<?php
include "conexion.php";
$matricu=$_POST["idUsuario"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql ="DELETE from usuario  WHERE ID_USUARIO ='$matricu'";

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