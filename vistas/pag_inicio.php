<?php 

//validamos que el usuario inicie la sesion
if($_SESSION['s_usuario']==null){
  header('Location:../index.php');
}
?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!--swalert-->
    <link rel="stylesheet" href="../swa2/dist/sweetalert2.min.css">

    <title>LOGIN DE USUARIOS</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                <div class="jumbotron">
                <h1 class="display-4 text-center">Permisos</h1>
                <h2 class="text-center"> USUARIO <span class="badge badge-success"><?php echo$_SESSION['s_usuario'];?></span></h2>
                <p class="lead text-center">Usted no tiene permisos de administrador</p>
                <h2 class="text-center">Su permiso es:<span class="badge badge-waring"><?php echo$_SESSION['s_r_desc'];?></span></h2>
                <p class="lead text-center">Usted no tiene permisos de administrador</p>
                <hr class="my-4">

                <a class="btn btn-danger btn-lg" href="../bd/logout.php" 
                role="button">Cerrar Sesion</a>
                </div>
              </div>
          </div>   
      </div>

    <!-- Optional JavaScript; choose one of the two! -->
     <script type="text/javascript" src="../jquery/jquery-3.3.1.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="../popper/popper.min.js"></script>
    <!-- sweetalert2 js-->
    <script src="../swa2/dist/sweetalert2.all.min.js"></script>
    <!-- main js -->
    <script src="../main.js"></script>
  </body>
</html>