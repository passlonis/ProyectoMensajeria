

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>MENSAJERIA INSTANTANEA</title>
   <link rel="stylesheet" href="styles.css">
</head>

<body >

   <div class="container mt-5">

      <div class="row text-center ">
         <div class="col">
            <img class="logo" src="../assets/img/logo.png" alt="logo">
            <h3>BIENVENIDO A LA PRIMERA APP DE MENSAJERIA INSTANTANEA DE BOLIVIA</h3>
         </div>
      </div>

      <div class="row" >
         <div class="col-12">
            <form action="" method="post" >
               <fieldset>
                  <div class="form-group d-grid gap-2 col-8 mx-auto">
                     <label for="exampleInputEmail1" class="form-label mt-4">Email:</label>
                     <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingrese su email">
                     <small id="emailHelp" class="form-text text-muted">email@dominio.com</small>
                  </div>
                  <div class="form-group d-grid gap-2 col-8 mx-auto">
                     <label for="exampleInputPassword1" class="form-label mt-4">Password:</label>
                     <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
               </fieldset>

               <div class="col text-center d-grid gap-2 col-4 mx-auto mt-3 ">
               <button 
                  type="submit"
                  name="btnIngresar" 
                  class="btn btn-success btn-lg mb-3 ">Ingresar</button>

                  <button 
                     type="button"
                     name="btnRegistrarse"
                     onclick="window.location.href='./registro.php'"
                     class="btn btn-primary btn-lg  ">Registrarse
                  </button> 
               </div>
              
            </form>
         </div>
      </div>

         <?php include("validacionInicio.php") ?>

   </div>
</body>
</html>