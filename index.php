<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <link href="stylesheet" href="./bootstrap.min.css">
    <!-- ICONOS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--DataTables-->
    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <!--datables stilos bootstrap 4 CSS-->
    <link rel="stylesheet" href="./DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css">
    <!--  -->
    <link rel="stylesheet" href="./estilosc.css">


    <title>INICIO</title>
</head>

<body background="./img/bg.jpg" class="text-align:center">
    <h1 class="mas-grande text-center text-dark">BIENVENIDO</h1>
    <div id="login" class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-md-4 formulario">
                <!-- id="formlogin" -->
                <form class="form text-center pt-3" action="./principal.php" method="POST">
                    <div class="form-group mx-ms-4 pb-3">
                        <img class="med" src="./img/med.png" width="200" height="150">
                    </div>
                    <div class="form-group mx-ms-4 pb-3">
                        <h3 class="text-dark">INICIAR SESION</h3>
                    </div>
                    <div class="form-group mx-ms-4 pt-3">
                        <label for="usuario" class="text-dark">USUARIO:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite su usuario">
                    </div>
                    <div class="form-group mx-ms-4 pb-3">
                        <label for="password" class="text-dark">PASSWORD</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite su contraseña">
                    </div>
                    <div class="form-group mx-ms-4 pb-3">
                        <input type="submit" value="ENTRAR" name ="ENTRAR" class="btn btn-primary">
                    </div>
                    <div class="form-group mx-ms-4 pb-3">
                        <input type="reset" value="LIMPIAR" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="registrar" class="container">
        <div class="row justify-content-center pt-5 mt-5">
            <div class="col-md-4 formulario">
                <form id="formlogin" class="form text-center pt-3" action="./registrar.php" method="POST">
                    <div class="form-group mx-ms-4 pb-3">
                        <img src="./img/user.png" width="150" height="150">
                    </div>
                    <div class="form-group mx-ms-4 pb-3">
                        <h3 class="text-center text-dark">REGISTRAR USUARIO</h3>
                    </div>
                    <div class="form-group mx-ms-4 pt-3">
                        <label for="usuario" class="text-dark">NOMBRES:</label>
                        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Digite sus nombres">
                    </div>
                    <div class="form-group mx-ms-4 pt-3">
                        <label for="usuario" class="text-dark">APELLIDOS:</label>
                        <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="Digite sus apellidos">
                    </div>
                    <div class="form-group mx-ms-4 pt-3">
                        <label for="usuario" class="text-dark">EMAIL:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite su usuario">
                    </div>
                    <div class="form-group mx-ms-4 pt-3">
                        <label for="password" class="text-dark">PASSWORD:</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite la contraseña">
                    </div>
                    <div class="form-group mx-ms-4 pt-3">
                        <input type="submit" value="REGISTRAR" name="REGISTRAR" class="btn btn-primary">
                        <input type="reset" value="LIMPIAR" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->
    <script type="text/javascript" src="./javascript/jquery-3.3.1.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="./popper/popper.min.js"></script>
    <!--sweetalert2 js-->
    <script src="./swa2/dist/sweetalert2.all.min.js"></script>
    <!--MAIN js-->
    <script src="./main.js"></script>


    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->



</body>

</html>