<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRO DE DOCTORES</title>

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <link href="stylesheet" href="./bootstrap.min.css">
    <!-- ICONOS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--DataTables-->
    <link rel="stylesheet" href="./DataTables/datatables.min.css">
    <!--datables stilos bootstrap 4 CSS-->
    <link rel="stylesheet" href="./DataTables/DataTables-1.10.25/css/dataTables.bootstrap4.min.css">

    <?php
        include_once ('./func.php');
        $consulta = doctor();
    ?>

</head>

<body background="./img/bg.jpg">


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./principal.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./registroP.php">Registro de pacientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./registroD.php">Registro de doctores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./tratamiento.php">Tratamientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./factura.php">Facturas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./pdf.php">Descargar PDF</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button type="button" id="btnnuevo" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalDoctores">
                    <span class="material-icons">add_circle</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center container">
        <h3>TABLA DE DOCTORES</h3>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaDoctores" class="table table-primary table-bordered table-condesed" style="width: 100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID DOCTOR</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>ESPECIALIDAD</th>
                            </tr>
                            <?php
                            while ($persona = $consulta->fetch_assoc()) {
                                ?>
                            <tr>
                                <td><?php echo $persona['IdDoctor'];?></td>
                                <td><?php echo $persona['NomDoctor'];?></td>
                                <td><?php echo $persona['ApellDoctor'];?></td>
                                <td><?php echo $persona['NombreEsp'];?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- VENTA MODAL-->
    <div class="container">
        <div class="modal fade" id="modalDoctores" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">REGISTRAR DOCTOR</h5>
                    </div>

                    <!-- FORMULARIO DE INSCRIPCION DE DOCTORES-->
                    <form id="formPacientes">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label">N?? ID:</label>
                                        <input type="text" class="form-control" placeholder="Digite el ID" id="IdDoctor">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label">NOMBRE:</label>
                                        <input type="text" class="form-control" placeholder="Digite el Nombre" id="NomDoctor">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label">APELLIDOS:</label>
                                        <input type="text" class="form-control" placeholder="Digite los apellidos" id="ApellDoctor">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-form-label">ESPECIALIDAD:</label>
                                        <input type="text" class="form-control" placeholder="Digite la especialidad" id="especialidad">
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="submit" id="btnGuardar" class="btn btn-primary">Ingresar Doctor</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->
    <script src="./javascript/jquery-3.3.1.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="./popper/popper.min.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="./bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>

    <!--  DATA_TABLES -->
    <script src="./DataTables/datatables.min.js"></script>

    <script type="text/javascript" src="func.js"></script>


    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>