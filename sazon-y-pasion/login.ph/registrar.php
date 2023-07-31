<?php
 include ("./registrar.php");
use function PHPSTORM_META\sql_injection_subst;


   if (empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["correo"]) or empty($_POST["contraseña"])){
   echo "error";
   }else{
      $Nombres = $_POST["nombre"];
      $Apellidos = $_POST["apellido"];
      $Correo = $_POST["correo"];
      $Contraseña = $_POST["contraseña"];
      $sql=$conexion->query("INSERT INTO registro  values('$Nombres','$Apellidos','$Correo','$Contraseña')");
      if ($sql==1){
         header('location.login.php');
      }else{
         echo '<div class="alert">error al registar</div>';

      }
   }
?>