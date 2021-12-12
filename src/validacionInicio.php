
<?php

   if (isset($_POST['btnIngresar'])) {

      $email = trim($_POST['email']);
      $password = $_POST['password'];

      if ((empty($email)) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
         echo" <p class='text-danger' > No ingreso un correo valido </p> ";
      }

      if ((empty($password) || (strlen($password) < 6) )){
         echo" <p class='text-danger' > Password debe de ser mayor a 6 letras </p> ";
      }else {
         echo "<p class='text-success' > Datos correctos</p>";
      }
   }

?>