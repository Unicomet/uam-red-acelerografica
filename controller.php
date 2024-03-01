<?php

if(isset($_REQUEST["numeroCoordenada"])){
    include_once("include/arreglo_registros.php");
    $numeroCoordenada = filter_var($_REQUEST["numeroCoordenada"], FILTER_SANITIZE_NUMBER_INT);
    $dataCoordanada = $arrRegistros[$numeroCoordenada];
    $fecha       = $dataCoordanada[0];
    $magnitud    = $dataCoordanada[2];
    $profundidad = $dataCoordanada[5];
    ?>
    <p class="text-center fs-5 my-3"><?=$fecha?></p>
    <p><strong>Magnitud:</strong> <?=$magnitud?></p>
    <p><strong>Profundidad:</strong> <?=$profundidad?></p>
    <!--<a href="registros.php#<?=$numeroCoordenada?>" class="btn btn-outline-danger">Ver registros</a>-->
<?php 
    } 
?>