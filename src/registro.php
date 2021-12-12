<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>MENSAJERIA INSTANTANEA</title>
   <link rel="stylesheet" href="css/index.css">
</head>

<body >

   <div class="container mt-5">

      <div class="row text-center ">
         <div class="col">
            <img class="logo" src="../img/logo.png" alt="logo">
            <h3>BIENVENIDO A LA PRIMERA APP DE MENSAJERIA INSTANTANEA DE BOLIVIA</h3>
         </div>
      </div>

      <div class="row d-grid gap-2 col-8 mx-auto" >
         <div class="col-12">
            <form  action="" method="post" >
            <fieldset>
               <div class="form-group">
                  <label  class="form-label mt-4">Nombre:</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                  <!-- <small id="emailHelp" class="form-text text-muted">email@dominio.com</small> -->
               </div>
               <div class="form-group">
                  <label  class="form-label mt-4">Apellidos:</label>
                  <input type="text" class="form-control" name="apellido"  placeholder="Ingrese su apellidos">
               </div>
               <div class="form-group">
                  <label  class="form-label mt-4">Pais:</label>
                  <input type="text" class="form-control" name="pais"  placeholder="Pais de origen">
               </div>
               <div class="form-group">
                  <label  class="form-label mt-4">Ciudad:</label>
                  <input type="text" class="form-control" name="ciudad"  placeholder="Ciudad">
               </div>
               <div class="form-group">
                  <label  class="form-label mt-4">Email:</label>
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese su email">
                  <small id="emailHelp" class="form-text text-muted">email@dominio.com</small>
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1" class="form-label mt-4">Password:</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
               </div>
               
            </fieldset>


               <div class="col text-center d-grid gap-2 col-6 mx-auto mt-3 ">
                  <button 
                     type="submit"
                     name="btnEnviarRegistro"
                     class="btn btn-success btn-lg mb-3 ">Enviar registro
                  </button>

                  <button 
                     type="button"
                     onclick="window.location.href='./index.php'" 
                     class="btn btn-secondary btn-lg  ">Atras
                  </button> 

               </div>

               <?php
                  include("validacionRegistro.php");
               ?>

            </form>
         </div>
      </div>

      <!-- <div class="row mt-3" >
         <div class="col text-center d-grid gap-2 col-4 mx-auto ">
            <button type="submit" class="btn btn-success btn-lg mb-3 ">Enviar registro</button>
         </div>
      </div>

      <div class="row">
         <div class="col text-center d-grid gap-2 col-4 mx-auto">
            <button 
               type="button"
               onclick="window.location.href='./index.php'" 
               class="btn btn-secondary btn-lg  ">Atras
            </button> 
         </div>
      </div> -->

   </div>
</body>
</html>