<?php

   if (isset($_POST['btnEnviarRegistro'])) {

      $nombre = trim($_POST['nombre']);
      $apellido = trim($_POST['apellido']);
      $pais = trim($_POST['pais']);
      $ciudad = trim($_POST['ciudad']);
      $email = trim($_POST['email']);
      $password = $_POST['password'];

      if ((empty($nombre)) || (strlen($nombre) > 15) || (!preg_match("/[a-zA-Z]+$/",$nombre))) {
         echo" <p class='text-danger' > Ingrese un nombre valido </p> ";
      }

      if ((empty($apellido)) || (strlen($apellido) > 15) || (!preg_match("/[a-zA-Z]+$/",$apellido))) {
         echo" <p class='text-danger' > Ingrese un apellido valido </p> ";
      }

      if ((empty($pais)) || (strlen($pais) > 12) || (!preg_match("/[a-zA-Z]+$/",$pais))) {
         echo" <p class='text-danger' > Ingrese un pais valido </p> ";
      }

      if ((empty($ciudad)) || (strlen($ciudad) > 15) || (!preg_match("/[a-zA-Z]+$/",$ciudad))) {
         echo" <p class='text-danger' > Ingrese una ciudad valida </p> ";
      }

      if ((empty($email)) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo" <p class='text-danger' > No ingreso un correo valido </p> ";
      }

      if ((empty($password) || (strlen($password) < 6) )){
         echo" <p class='text-danger' > Password debe de ser mayor a 6 letras </p> ";
      }else {
         // echo "<p class='text-success' > Datos correctos</p>";
      }
   }
?>