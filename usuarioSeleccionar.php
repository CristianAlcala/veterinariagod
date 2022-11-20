<?php
session_start();
if (empty($_SESSION["id"])){
   header ("location: login.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Actualizar usuario</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vet_v3";

$iduser = $_POST['ID_USUARIOS'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Conexion fallida: " . mysqli_connect_error());
}

$sql = "SELECT ID_USUARIOS, NOMBRE, USUARIO, CORREO, SUBROL FROM usuarios WHERE ID_USUARIOS = $iduser";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {

   
    $nom = $row["NOMBRE"];
    $usuario = $row["USUARIO"];
    $corr = $row["CORREO"];
    $subrol= $row["SUBROL"];

   
  }
} else {
  echo "0 resultados";
}

mysqli_close($conn);
?>
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

    <form action="usuarioActualizar.php" method="POST">
    <section class="form-registrar">
        <h4>Actualizar Usuario </h4>
        <input class="controls" type="text" name="Nnombre" id="Nnombre" placeholder="Escribe el nombre" value='<?php echo $nom; ?>' required>
        <input class="controls" type="text" name="Ncorreo" id="Ncorreo" placeholder="Ingresa el correo" value='<?php echo $corr; ?>' required> 
        <input class="controls" type="text" name="Nusuario" id="Nusuario" placeholder="Ingresa el usuario" value='<?php echo $usuario; ?>' required> 
        <input class="controls" type="text" name="Nsubrol" id="Nsubrol" placeholder="Escribe el subrol" value='<?php echo $subrol; ?>' required>





    <input class="controls" type='number' readonly hidden id='iduser' name='iduser' value='<?php echo $iduser; ?>'><br><br>

     <input class="botons"   type="submit" value="Actualizar Usuario">

    </section>
    </form>

</body>

</html>