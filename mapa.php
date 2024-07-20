<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa | Red Acelerográfica UAM</title>
    <meta name="description" content="">

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="assets/js/google_map.js">

</head>

<body>




    <div class="contenido">




        <? include_once('views/navbar.php'); ?>



        <section class="container first-container">
            <div class="row">

                <div id="divMapaRegistros" class="col-12 offset-0" style="min-height: 500px;"> </div>

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


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <script>
        function toogleSideNav(x) {
            var activo = x.classList.contains('active');
            if (activo) document.getElementById("mySidenav").style.width = "0";
            else document.getElementById("mySidenav").style.width = "100%";
            x.classList.toggle("active");
        }
    </script>
    
    <?php include_once("include/arreglo_registros.php")?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPLm6fP7MRTF1XO6Zmpw3cxG9CG47VcZY&callback=initMap"></script>
    <script>
        var mapRegistros;

        function initMap() {

            mapRegistros = new google.maps.Map(document.getElementById('divMapaRegistros'), {
                center: {
                    lat: 18.004686782120295,
                    lng: -98.6063086835308
                },
                zoom: 6.5,
            });
            <?
            foreach($arrRegistros as $num => $arrValores){
                $img = '';
                    if($arrValores[2] < 4.1) $img = "assets/img/dot-04.png";
                elseif($arrValores[2] < 5.1) $img = "assets/img/dot-05.png";
                elseif($arrValores[2] < 6.1) $img = "assets/img/dot-06.png";
                elseif($arrValores[2] < 7.1) $img = "assets/img/dot-07.png";
                else $img = "assets/img/dot-08.png"; 
                ?>
                var marker_<?=$num?> = new google.maps.Marker({
                    position: {
                        lat: <?=$arrValores[3]?>, //en el subarreglo la latutud esta en la pisicion 3
                        lng: <?=$arrValores[4]?>
                    },
                    map: mapRegistros,
                    title: '<?=$num . ": " . "Magnitud " . $arrValores[2] . " Profundidad " . $arrValores[5] . " " . $arrValores[0]?>',
                    icon: '<?=$img?>'
                });
                <?
            }
            ?>
        }
    </script>
</body>

</html>