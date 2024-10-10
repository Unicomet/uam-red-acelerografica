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
            <div class="row my-2 ">
                <div class="col-12 offset-0 col-lg-5 ">
                    <div class="col-12 offset-0 col-lg-12 offset-lg-0">
                        <h1 data-i18n="stations-title">Estaciones</h1>
                        <h3>Red Acelerográfica UAM</h3>
                    </div>

                    <div class=" col-12 offset-0 col-lg-12 offset-lg-0 mt-5 ">
                        <p class=" text-justify" data-i18n="stations-description">
                            Son cinco los sitios con estaciones acelerográficas que conforman la RA-UAM. Las primeras estaciones iniciaron su operación en el año de 1993 en las Unidades Académicas Azcapotzalco (RIDA), Iztapalapa (RIDI) y Xochimilco (RIDX), tiempo después, en la
                            Etapa III se habilitaron dos estaciones más en las instalaciones de la Rectoría General (RIDR) y en la Unidad Lerma (RIML).
                        </p>
                        <div class="mt-4 mb-1 text-center">
                            <a class="btn btn-outline-danger" href="registros.php" role="button" data-i18n="stations-button-registers">REGISTROS</a>
                        </div>
                    </div>
                </div>
                <div id="map" class="col-sm offset-0 col-lg mx-3 mt-4"> </div>
            </div>

            <div class="col-12 mt-5">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="text-center">
                            <tr class="table-dark">
                                <th scope="col" colspan="7" data-i18n="stations-table-title">ESTACIONES DE LA RA-UAM</th>
                            </tr>
                            <tr class="table-dark">
                                <th scope="col" data-i18n="stations-table-station">Estación</th>
                                <th scope="col" data-i18n="stations-table-faculty">Unidad Académica</th>
                                <th scope="col" data-i18n="stations-table-localization">Localización</th>
                                <th scope="col" data-i18n="stations-table-altitude">Altitud (m)</th>
                                <th scope="col" data-i18n="stations-table-ground">Tipo de suelo</th>
                                <th scope="col" data-i18n="stations-table-year">Año de instalación</th>
                                <th scope="col" data-i18n="stations-table-seisms">Sismos registrados</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th scope="row">RIDA</th>
                                <td>Azcapotzalco</td>
                                <td>19.5026, -99.1861</td>
                                <td>2245</td>
                                <td data-i18n="stations-table-limoarenoso">Limo arenoso</td>
                                <td>1993<sup>(2)</sup></td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <th scope="row">RIDX</th>
                                <td>Xochimilco</td>
                                <td>19.3052, -99.1034</td>
                                <td>2260</td>
                                <td data-i18n="stations-table-limosarenasarcillosas">Limos y arenas arcillosas</td>
                                <td>1993<sup>(1)</sup></td>
                                <td>37</td>
                            </tr>
                            <tr>
                                <th scope="row">RIDR</th>
                                <td>Rectoría General</td>
                                <td>19.2862, -99.1367</td>
                                <td>2248</td>
                                <td data-i18n="stations-table-limosarenasarcillosas">Limos y arenas arcillosas</td>
                                <td>2012<sup>(2)</sup></td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <th scope="row">RIDI</th>
                                <td>Iztapalapa</td>
                                <td>19.360, -99.060</td>
                                <td>2230</td>
                                <td data-i18n="stations-table-limosarenasarcillosas">Limos y arenas arcillosas</td>
                                <td>1993<sup>(*)</sup></td>
                                <td>23</td>
                            </tr>
                            <tr>
                                <th scope="row">RIML</th>
                                <td>Lerma</td>
                                <td>19.2915, -99.5021</td>
                                <td>2571</td>
                                <td data-i18n="stations-table-limosarcillosos">Limos arcillosos</td>
                                <td>2012<sup>(*)</sup></td>
                                <td>42</td>
                            </tr>
                            <tr>
                                <th scope="row">RUML</th>
                                <td>Lerma</td>
                                <td>19.2913, -99.5006</td>
                                <td>2570</td>
                                <td data-i18n="stations-table-limosarcillosos">Limos arcillosos</td>
                                <td>2021<sup>(2)</sup></td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <th scope="row">UAMR</th>
                                <td>Rectoría General</td>
                                <td>19.2871, -99.1371</td>
                                <td>2245</td>
                                <td data-i18n="stations-table-limosarenasarcillosas">Limos y arenas arcillosas</td>
                                <td>2012<sup>(1)</sup></td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th scope="row">UAMI</th>
                                <td>Iztapalapa</td>
                                <td>19.3645, -99.0721</td>
                                <td>2228</td>
                                <td data-i18n="stations-table-limosarenasarcillosas">Limos y arenas arcillosas</td>
                                <td>2012<sup>(1)</sup></td>
                                <td>8</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7" data-i18n="stations-tablefooter-equipment"> Equipo actual: </td>
                            </tr>
                            <tr>
                                <td colspan="7" data-i18n="stations-tablefooter-nooperation">(*) Estación fuera de operación</td>
                            </tr>
                            <tr>
                                <td colspan="7" data-i18n="stations-tablefooter-acelerographbasalt">(1) Acelerógrafo Episensor Basalt de Kinemetrics de 24 bits. </td>
                            </tr>
                            <tr>
                                <td colspan="7" data-i18n="stations-tablefooter-acelerographkinemetrics">(2) Acelerógrafo Episensor ETNA2 de Kinemetrics de 24 bits. </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>





        <div class="push"></div>
    </div>
    <!-- contenido -->


    <!-- footer -->
    <?php include_once('views/footer.php'); ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="assets/js/ra-uam.js"></script>
    <?php include_once("include/google_map_estaciones.php") ?>

</body>

</html>