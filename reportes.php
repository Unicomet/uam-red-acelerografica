<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reportes - Red Acelerográfica UAM</title>
    <meta name="description" content="Reportes de la Red Acelerográfica UAM">

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">


</head>

<body>




    <div class="contenido">




        <?php include_once('views/navbar.php'); ?>



        <section class="container first-container">
            <div class="row">

                <div class="col-10 offset-1">
                    <h1 data-i18n="reports-title">Reportes</h1>
                    <h3>Red Acelerográfica UAM</h3>
                </div>

                <div class=" col-10 offset-1 mt-3">
                    <div class="accordion" id="accordi">
                        <!-- Pegar Aquí debajo el código para agregar un nuevo año -->

                        <!--Año 2024 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                    2024
                                </button>
                            </h2>
                            <div id="collapse24" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- Pegar Aquí debajo el código para agregar un nuevo reporte -->

                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                    2023
                                </button>
                            </h2>
                            <div id="collapse23" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- Pegar Aquí debajo el código para agregar un nuevo reporte -->
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                    2022
                                </button>
                            </h2>
                            <div id="collapse22" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <!-- Pegar Aquí debajo el código para agregar un nuevo reporte -->
                                    <a class="list-group-item" href="storage/reports/REPORTE_RA-UAM_SISMOS_09_2022.pdf" target="_blank"> Reporte del sismo del 19 de Septiembre del 2022 </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


    </div>
    <!-- contenido -->

    <!-- footer -->
    <?php include_once('views/footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</body>

</html>