<?php
session_start();
//si el usuario oprime el boton ingresar escribe su usuario y contrasena se almacenan los datos en las variables.
if (!empty($_POST["btningresar"])) {
   if (!empty($_POST["Nusuario"]) and !empty($_POST["Npassword"])) {

      $usuario=$_POST["Nusuario"];
      $password=$_POST["Npassword"];
      $sql=$lconexion->query(" select * from usuarios where USUARIO ='$usuario' and CLAVE='$password' ");
      #si el usuario existe, me llevara a la pag de:index
      if ($datos=$sql->fetch_object()) {
         $_SESSION["id"]=$datos->ID_USUARIOS;
         $_SESSION["nombre"]=$datos->NOMBRE;
         $_SESSION["tipo"]=$datos->TIPO;

         if($_SESSION["tipo"]==0){                 // Administrador
            header("location: indexAdmin.php");
         }else if($_SESSION["tipo"]==1){           // Veterinarios
            header("location: index.php");
         }else if($_SESSION["tipo"]==2){                                    // Clientes
            header("location: indexClientes.php");
         }


      } else {
         echo "<div>Acceso denegado</div>";
      }
      
   } else {
      echo "Campos vacios";
   }
   
}

?>