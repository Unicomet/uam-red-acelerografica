<?php

$url = explode("/", $_SERVER["SCRIPT_FILENAME"]);
$actual = $url[count($url) - 1];
//$nivel    = $url[count($url)-2];
$actual = basename($_SERVER["PHP_SELF"]);
//echo "<br> ACTUAL: ". $actual;
//echo "<br>" . $nivel;

$menu_1 = $menu_2 = $menu_3 = $menu_4 = $menu_5 = $menu_6 = $menu_7 = "";
$curr_1 = $curr_2 = $curr_3 = $curr_4 = $curr_5 = $curr_6 = $curr_7 = "";

if ($actual == "index.php") {
    $curr_1 = 'aria-current="page"';
    $menu_1 = "active";
} elseif ($actual == "reciente.php") {
    $curr_2 = 'aria-current="page"';
    $menu_2 = "active";
} elseif ($actual == "reportes.php") {
    $curr_3 = 'aria-current="page"';
    $menu_3 = "active";
} elseif ($actual == "estaciones.php") {
    $curr_4 = 'aria-current="page"';
    $menu_4 = "active";
} elseif ($actual == "faq.php") {
    $curr_5 = 'aria-current="page"';
    $menu_5 = "active";
} elseif ($actual == "historia.php") {
    $curr_6 = 'aria-current="page"';
    $menu_6 = "active";
} elseif ($actual == "creditos.php") {
    $curr_7 = 'aria-current="page"';
    $menu_7 = "active";
}
?>




<nav id="nav-mobile" class="d-block d-xl-none">
    <div class="container" onclick="toogleSideNav(this)">
        <div class="row">
            <div class="col-5 col-md-3">
                <a href="index.php">
                    <picture>
                        <source srcset="assets/img/logo-uam-6.webp" type="image/webp">
                        <img src="assets/img/logo-uam-6.jpg" class="img-fluid" alt="uam, red, acelerográfica">
                    </picture>
                </a>
            </div>
            <div class="col-2 offset-5 col-md-1 offset-md-8">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </div>
</nav>

<div id="mySidenav" class="sidenav">
    <a href="index.php">Inicio</a>
    <a href="reciente.php">Reciente</a>
    <a href="reportes.php">Reportes</a>
    <a href="estaciones.php">Estaciones</a>
    <a href="historia.php">Historia</a>
</div>

<nav class="navbar fixed-top navbar-expand-xl d-none d-xl-block">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/logo-uam-06.png" alt="uam, red, acelerográfica">
        </a>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?= $menu_1 ?>" <?= $curr_1 ?> href="index.php" data-i18n="nav-home">Inicio</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link <?= $menu_2 ?>" <?= $curr_2 ?> href="reciente.php" data-i18n="nav-recent">Reciente</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link <?= $menu_3 ?>" <?= $curr_3 ?> href="reportes.php" data-i18n="nav-reports">Reportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $menu_4 ?>" <?= $curr_4 ?> href="estaciones.php" data-i18n="nav-stations">Estaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $menu_6 ?>" <?= $curr_6 ?> href="historia.php" data-i18n="nav-history">Historia</a>
                </li>
                <select class="form-select w-auto h-50  bg-secondary text-white" id="lang-switcher">
                    <option selected value="es">Español</option>
                    <option value="en">English</option>
                </select>
            </ul>
        </div>
    </div>
</nav>

<script src="../assets/js/i18n.js"></script>
<script src="../assets/js/language-switching.js"></script>