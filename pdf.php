<?php
include "./conexion.php";
$ob = Conectar();

$query = $ob->query("select * from doctor");
$doctor = array();
$n = 0;
while ($r = $query->fetch_object()) {
    $doctor[] = $r;
    $n++;
}

$query2 = $ob->query("select * from cama");
$cama = array();
while ($c = $query2->fetch_object()) {
    $cama[] = $c;
}

$query3 = $ob->query("select * from tratamiento");
$tratamiento = array();
while ($t = $query3->fetch_object()) {
    $tratamiento[] = $t;
}

$query4 = $ob->query("select * from paciente");
$paciente = array();
while ($p = $query4->fetch_object()) {
    $paciente[] = $p;
}

$query5 = $ob->query("select * from registro");
$registro = array();
while ($i = $query5->fetch_object()) {
    $registro[] = $i;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Generar PDF</title>

    <link rel="stylesheet" type="text/css" href="./bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <script type="text/javascript" src="./javascript/jquery-3.3.1.min.js"></script>
    <script src="./bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>
    <script src="./jspdf/dist/jspdf.min.js"></script>
    <script src="./js/jspdf.plugin.autotable.min.js"></script>


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
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Descargar PDF</h1>
                        <br>
                    </div>
                    <div class="col-md-12"><br></div>

                    <div class="col-md-4">
                        <p><strong>Descargar Tabla de Doctores</strong></p>
                        <button id="PDFDoctores" class="btn btn-info">Crear PDF</button>
                        <br>
                    </div>

                    <div class="col-md-12"><br></div>
                    <div class="col-md-4">
                        <p><strong>Descargar Tabla de Camas</strong></p>
                        <button id="PDFCamas" class="btn btn-info">Crear PDF</button>
                        <br>
                    </div>

                    <div class="col-md-12"><br></div>
                    <div class="col-md-4">
                        <p><strong>Descargar Tabla de Tratamientos</strong></p>
                        <button id="PDFTra" class="btn btn-info">Crear PDF</button>
                        <br>
                    </div>
                    
                    <div class="col-md-12"><br></div>
                    <div class="col-md-4">
                        <p><strong>Descargar Tabla Facturas</strong></p>
                        <button id="PDFFact" class="btn btn-info">Crear PDF</button>
                        <br>
                    </div>


                    <div class="col-md-4"></div>
                </div>
            </div>
        </div><!-- /.Cierra-default-panel -->
    </div><!-- /.container-fluid -->

    <script>
        $("#PDFDoctores").click(function() {
            var pdf = new jsPDF();
            pdf.text(20, 20, "Mostrar Tabla de Doctores");
            var columns = ["ID", "Nombre", "Apellido", "Id Especialidad"];
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
            pdf.save('TablaDoctores.pdf');
        });
    </script>

    <script>
        $("#PDFCamas").click(function() {
            var pdf = new jsPDF();
            pdf.text(20, 20, "Mostrar Tabla de Camas");
            var columns = ["ID", "Disponibilidad", "Costo"];
            var data = [
                <?php foreach ($cama as $c) : ?>["<?php echo $c->IdCama; ?>", "<?php echo $c->Disponibilidad; ?>",
                        "<?php echo $c->CostoC; ?>"],
                <?php
                endforeach; ?>
            ];
            pdf.autoTable(columns, data, {
                margin: {
                    top: 25
                }
            });
            pdf.save('TablaCamas.pdf');
        });
    </script>

    <script>
        $("#PDFTra").click(function() {
            var pdf = new jsPDF();
            pdf.text(20, 20, "Mostrar Tabla de Tratamientos");
            var columns = ["ID", "Nombre", "Costo"];
            var data = [
                <?php foreach ($tratamiento as $t) : ?>["<?php echo $t->IdTratamiento; ?>", "<?php echo $t->NombreTra; ?>",
                        "<?php echo $t->CostoTra; ?>"],
                <?php
                endforeach; ?>
            ];
            pdf.autoTable(columns, data, {
                margin: {
                    top: 25
                }
            });
            pdf.save('TablaTra.pdf');
        });
    </script>


    <script>
        $("#PDFFact").click(function() {
            var pdf = new jsPDF();
            pdf.text(20, 20, "Mostrar Tabla de Facturas");
            var columns = ["ID Registro", "ID Paciente", "ID Doctor", "ID Cama","Nombre"];
            var data = [
                <?php foreach ($registro as $i): ?>["<?php echo $s->IdSeguro; ?>", "<?php echo $s->NombreSeg; ?>"]?>,
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

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->


</body>

</html>