<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estaciones | Red Acelerográfica UAM</title>
    <meta name="description" content="Son cinco los sitios con estaciones acelerográficas que conforman la Red Acelerográfica UAM.">

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">

</head>

<body>




    <div class="contenido">

        <?php include_once('views/navbar.php'); ?>

        <section class="container first-container">
            <div class="row mt-3">
                    <div id = "summary" class="col-12 offset-0 col-lg-5 offset-lg-0">
                        <h2 class="fw-bold"> Último sismo </h2>
                        <p class="fw-bold">TIEMPO DEL CENTRO DE MÉXICO (GMT-6)</h3>
                        <p>Fecha: </p>
                        <p>Hora: </p>
                        <p>Magnitud: </p>
                        <p>Ubicación: </p>
                        <p>Tiempo: </p>
                        <p>Profundidad: </p>
                    </div>
                    <div id="map" class="col-12 col-lg-7 mt-lg-3" style="min-height: 380px;"> </div>
            </div>

            <div class="row mt-5">     
                <div id ="advice" class="text-center w-200 col-lg-12">
                            <p class="fs-6 fw-bold text-center"> Hasta las 15:30 horas del 7/diciembre/2023 no se han registrado réplicas del sismo de M 5.7 ocurrido en Puebla el 7/diciembre/2023</p>
                        </div>

                <div id = "reports" class="reports col-lg-12 text-center mt-3">
                    <h4 class="title-reports">Reportes especiales</h4>

                    <div id="carousel-reports" class="carousel slide carousel-dark" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <a href = "#home" class= "carousel-item-link d-block w-100"> Informe del sismo de 7 de Diciembre de 2020</a>
                        </div>
                        <div class="carousel-item">
                            <a href = "#home" class= "carousel-item-link d-block w-100" > Informe del sismo de 7 de Diciembre de 2020</a>
                        </div>
                        <div class="carousel-item">
                            <a href = "#home" class= "carousel-item-link d-block w-100"> Informe del sismo de 7 de Diciembre de 2020</a>
                        </div>
                        </div>
                        <button class="carousel-control carousel-control-prev dark" type="button" data-bs-target="#carousel-reports" data-bs-slide="prev" >
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control carousel-control-next " type="button" data-bs-target="#carousel-reports" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                        <!-- <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carousel-reports" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carousel-reports" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carousel-reports" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

        <div class="push"></div>
    </div>
    <!-- contenido -->



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p>Av. San Pablo 180, Col. Reynosa Tamaulipas, Alcaldía Azcapotzalco, C.P. 02200, CDMX</p>
                    <p>&copy; UAM AZCAPOTZALCO
                        <?=date('Y');?>
                    </p>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="assets/js/ra-uam.js"></script>
    <?php include_once("include/google_map_recent.php")?>
    
</body>

</html>