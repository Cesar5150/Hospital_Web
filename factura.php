<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRATAMIENTOS</title>

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
        $consulta = consultar();
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
                <button type="button" id="btnnuevo" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalTratamiento">
                    <span class="material-icons">add_circle</span>
                </button>
            </div>
        </div>
    </div>
    <br>
    <div class="text-center container">
        <h3>TABLA DE FACTURAS</h3>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaTratamientos" class="table table-primary table-bordered table-condesed" style="width: 100%">
                        <thead class="text-center">
                            <tr>
                                <th>ID REGISTRO</th>
                                <th>FECHA INGRESO</th>
                                <th>FECHA SALIDA</th>
                                <th>ID PACIENTE</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>ID DOCTOR</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>ESPECIALIDAD</th>
                                <th>TRATAMIENTO</th>
                                <th>COSTO</th>
                                <th>ID CAMA</th>
                                <th>COSTO</th>
                            </tr>

                            <?php
                            while ($persona = $consulta->fetch_assoc()) {
                                ?>
                            <tr>
                                <td><?php echo $persona['IdRegistro'];?></td>
                                <td><?php echo $persona['FechaIngreso'];?></td>
                                <td><?php echo $persona['FechaSalida'];?></td>
                                <td><?php echo $persona['IdPaciente'];?></td>
                                <td><?php echo $persona['NomPaciente'];?></td>
                                <td><?php echo $persona['ApellPaciente'];?></td>
                                <td><?php echo $persona['IdDoctor'];?></td>
                                <td><?php echo $persona['NomDoctor'];?></td>
                                <td><?php echo $persona['ApellDoctor'];?></td>
                                <td><?php echo $persona['NombreEsp'];?></td>
                                <td><?php echo $persona['NombreTra'];?></td>
                                <td><?php echo $persona['CostoTra'];?></td>
                                <td><?php echo $persona['IdCama'];?></td>
                                <td><?php echo $persona['CostoC'];?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12"><br></div>
                    <div class="col-md-4">
                        <p><strong>Descargar Tabla</strong></p>
                        <button id="PDFFact" class="btn btn-info">Descargar</button>
                        <br>
                    </div>
    </div>

<script>
    $("#PDFFact").click(function() {
            var pdf = new jsPDF();
            pdf.text(20, 20, "Mostrar Tabla de Facturas");
            var columns = ["Id Registro","Fecha Ingreso", "Fecha Salida","Id Paciente","Nombre Paciente","Apellido Paciente",
                            "Id Doctor","Especialidad","Tratamiento", "Costo", "Id Cama", "Costo"];
            var data = [
                <?php foreach ($doctor as $d) : ?>["<?php echo $d->IdDoctor; ?>", "<?php echo $d->NomDoctor; ?>",
                        "<?php echo $d->ApellDoctor; ?>", "<?php echo $d->IdEspecialidad; ?>"],
                <?php
                endforeach; ?>
            ];
            pdf.autoTable(columns, data, {
                margin: {
                    top: 25
                }
            });
            pdf.save('TablaFact.pdf');
        });
</script>

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