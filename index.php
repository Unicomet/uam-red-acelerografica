<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Acelerográfica UAM</title>
    <meta name="description" content="La Universidad Autónoma Metropolitana, Unidad Azcapotzalco (UAM-Azcapotzalco), desarrolló una serie de proyectos de investigación sobre vulnerabilidad sísmica, sobre reparación de estructuras y sobre peligro y riesgo sísmico.">

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">


</head>

<body>




    <div class="contenido">

        <?php include_once "views/navbar.php"; ?>
        
        <section class="container first-container">
            <div class="row">

                <div class="col-12">
                    <h1>Red Acelerográfica UAM</h1>

                    <p class="mt-5">
                        La Red Acelerográfica de la Universidad Autónoma Metropolitana (RA-UAM), instalada para el registro de
                        movimientos fuertes del terreno, pone a disposición un catálogo de más de 900 acelerogramas de tres
                        componentes, registrados durante más de 160 sismos identificados en el periodo de tiempo de 1993 a 2024,
                        cuyas magnitudes están en el intervalo de M= 4.1 a M=8.2.
                    </p>
                </div>
            </div>
        </section>




        <section class="container">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div id="divMapaRegistros" class="col-12 offset-0" style="min-height: 500px;"> </div>
                </div>
                <div class="col-12 col-lg-2 order-lg-first">
                    <div class="card w-100 mt-3 mt-lg-0">
                        <div class="card-body text-center text-lg-start">
                            <p><strong>Sismos Catalogados</strong></p>  
                            <div class="row">
                                <div class="col-6 col-lg-12">
                                    <p><img src="assets/img/dot-04.png" alt="pin magnitud hasta 4"   class="img-fluid me-3"> 1.9 - 4.0 </p>
                                    <p><img src="assets/img/dot-05.png" alt="pin magnitud hasta 5"   class="img-fluid me-3"> 4.1 - 5.0 </p>
                                    <p><img src="assets/img/dot-06.png" alt="pin magnitud hasta 6"   class="img-fluid me-3"> 5.1 - 6.0 </p>
                                </div>
                                <div class="col-6 col-lg-12">
                                    <p><img src="assets/img/dot-07.png" alt="pin magnitud hasta 7"   class="img-fluid me-3"> 6.1 - 7.0 </p>
                                    <p><img src="assets/img/dot-08.png" alt="pin magnitud hasta 8.2" class="img-fluid me-3"> 7.1 - 8.2 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container my-5">

            <div class="row">
                <div class="col-6 col-lg-3">
                    <a href="historia.php" class="d-block p-5 mb-2 bg-secondary rounded text-white text-center">
                        <span class="iconify" data-icon="icon-park-outline:history-query" style="font-size: 50px;"></span>
                        <p class="pt-3">Historia</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="faq.php" class="d-block p-5 mb-2 bg-secondary rounded text-white text-center">
                        <span class="iconify" data-icon="akar-icons:info" style="font-size: 50px;"></span>
                        <p class="pt-3">FAQ</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="estaciones.php" class="d-block p-5 mb-2 bg-secondary rounded text-white text-center">
                        <span class="iconify" data-icon="wi:earthquake" style="font-size: 50px;"></span>
                        <p class="pt-3">Estaciones</p>
                    </a>
                </div>
                <div class="col-6 col-lg-3">
                    <a href="registros.php" class="d-block p-5 mb-2 bg-danger rounded text-white text-center">
                        <span class="iconify" data-icon="carbon:chart-line-data" style="font-size: 50px;"></span>
                        <p class="pt-3 d-none d-md-block">Ver registros</p>
                        <p class="pt-3 d-blocl d-md-none">Registros</p>
                    </a>
                </div>
            </div>

        </section>






        <section class="container">

            <div class="row">
                <div class="col-12">
                    <h3>Ligas de interés</h3>
                    <a href="http://www.ssn.unam.mx/" target="_blank" rel="noopener" class="liga-interes"><span class="iconify" data-icon="bx:world"></span> SSN, Servicio Sismológico Nacional</a>                       
                    <a href="http://www.cires.org.mx/" target="_blank" rel="noopener" class="liga-interes"> <span class="iconify" data-icon="bx:world"></span> Centro de Instrumentación y Registro Sísmico A.C. </a>                       
                    <a href="http://geografica.cenapred.unam.mx:8080/reporteSismosGobMX/" target="_blank" rel="noopener" class="liga-interes"> <span class="iconify" data-icon="bx:world"></span> Centro Nacional de Prevención de Desastres</a>                       
                    <a href="http://aplicaciones.iingen.unam.mx/acelerogramasrsm/redacelerografica.aspx" target="_blank" rel="noopener" class="liga-interes"><span class="iconify" data-icon="bx:world"></span> Base de datos de registros acelerográficos de la RAII-UNAM</a>                       
                    <a href="https://earthquake.usgs.gov/" target="_blank" rel="noopener" class="liga-interes"><span class="iconify" data-icon="bx:world"></span> USGS Earthquake Hazards Program</a>                       
                    <a href="https://www.bosai.go.jp/e/index.html" target="_blank" rel="noopener" class="liga-interes"><span class="iconify" data-icon="bx:world"></span> JAPAN - NIED National Research Institute for Earth Science and Disaster Prevention</a>
                </div>
            </div>

        </section>


        <div class="push"></div>
    </div>
    <!-- contenido -->

    <!-- footer -->
    <?php include_once "views/footer.php"; ?>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="assets/js/ra-uam.js"></script>
    
    <?php include_once "include/arreglo_registros.php"; ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPLm6fP7MRTF1XO6Zmpw3cxG9CG47VcZY&callback=iniciarMapa"></script>
    <script>

        function iniciarMapa() {

			var iw       = new google.maps.InfoWindow({maxWidth: 620}); 
            var mapRegistros = new google.maps.Map(document.getElementById('divMapaRegistros'), {
                center: {
                    lat: 18.004686782120295,
                    lng: -98.6063086835308
                },
                zoom: 6.5,
                scrollwheel:false,
                draggable:true, 
                mapTypeId:google.maps.MapTypeId.ROADMAP
            });
            <?php foreach ($arrRegistros as $num => $arrValores) {

                $img = "";
                if ($arrValores[2] < 4.1) {
                    $img = "assets/img/dot-04.png";
                } elseif ($arrValores[2] < 5.1) {
                    $img = "assets/img/dot-05.png";
                } elseif ($arrValores[2] < 6.1) {
                    $img = "assets/img/dot-06.png";
                } elseif ($arrValores[2] < 7.1) {
                    $img = "assets/img/dot-07.png";
                } else {
                    $img = "assets/img/dot-08.png";
                }
                ?>
                var marker_<?= $num ?> = new google.maps.Marker({
                    position: {
                        lat: <?= $arrValores[3] ?>, //en el subarreglo la latutud esta en la pisicion 3
                        lng: <?= $arrValores[4] ?>
                    },
                    map: mapRegistros,
                    title: '<?= $num .
                        ": " .
                        "Magnitud " .
                        $arrValores[2] .
                        " Profundidad " .
                        $arrValores[5] .
                        " " .
                        $arrValores[0] ?>',
                    icon: '<?= $img ?>'
                });
                google.maps.event.addListener(marker_<?= $num ?>, "click", function(){  
                    iw.setContent("<div id='boxCoordenada'></div>");
                    infoRegistro('<?= $num ?>')
                    iw.open(mapRegistros, this);
                });
            <?php
            } ?>
        }
    </script>
</body>

</html>