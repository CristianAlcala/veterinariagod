<?php
session_start();
//si el usuario oprime el boton ingresar escribe su usuario y contrasena se almacenan los datos en las variables.
if (!empty($_POST["btningresar"])) {
   if (!empty($_POST["Nusuario"]) and !empty($_POST["Npassword"])) {

      $usuario=$_POST["Nusuario"];
      $password=$_POST["Npassword"];
      $sql=$lconexion->query(" select * from USERS where USUARIO ='$usuario' and CLAVE='$password' ");
      #si el usuario existe, me llevara a la pag de:index
      if ($datos=$sql->fetch_object()) {
         $_SESSION["id"]=$datos->ID_USERS;
         $_SESSION["nombre"]=$datos->NOMBRES;
         $_SESSION["apellido"]=$datos->APELLIDOS;
         header("location: index.php");
      } else {
         echo "<div>Acceso denegado</div>";
      }
      
   } else {
      echo "Campos vacios";
   }
   
}

?>