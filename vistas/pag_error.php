<?php 
session_start();
$inn = 3000;
if (isset($_SESSION['timeout'])) {
    $_session_life = time() - $_SESSION['timeout'];
    if ($_session_life > $inn) {
        session_destroy(); //destruye la sesion
        header("location:../index.php");
    }
}
$_SESSION['timeout'] = time();


//validamos que el usuario inicie la sesion
if($_SESSION['usuario']==null){
  header('Location:../index.php');
}else{
    //validar si el usario tiene los permisos de ingreso del Perfil
    if ($_SESSION['id_rol']!=1){
       header('Location:pag_error.php');
    }
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
                <h1 class="display-4 text-center">Binevenido!!</h1>
                <h2 class="text-center"> USUARIO <?php echo$_SESSION['usuario'];?></h2>
                <hr>
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