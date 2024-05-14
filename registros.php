<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Acelerográfica UAM - Registros</title>
    <meta name="description" content="">

    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    

</head>

<body>



    <div class="contenido">


        <!-- Button trigger modal -->


        <?php include_once('views/navbar.php'); ?>

        

        <section class="first-container">
            <div class="container">
                

            

                <div class="row">

                    <div class="col-12">
                        <h1 class="font-weight-bold">Registros</h1>
                        <h3>Red Acelerográfica UAM</h3>
                    </div>


                    <div class="col-12 offset-0 mt-5">
                        <div class="table-responsive">
                            <table id="tabla-registros" class="table table-hover mt-4">
                                <thead>
                                    <tr class="table-dark">
                                        <th>No.</th>
                                        <th>Fecha (UTC)</th>
                                        <th>UTC sismo</th>
                                        <th data-bs-toggle="tooltip" title="Magnitud">M</th>
                                        <th>Lat N</th>
                                        <th>Long W</th>
                                        <th data-bs-toggle="tooltip" title="Profundidad">Prf</th>
                                        <th>RIDA</th>
                                        <th>RIDI</th>
                                        <th>RIDX</th>
                                        <th>RIML</th>
                                        <th>RUML</th>
                                        <th>RIDR</th>
                                        <th>RUMC</th>
                                        <th>Datos</th>
                                        <th>Imagen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include_once("include/arreglo_registros.php");
                                        foreach($arrRegistros as $num => $data){
                                            $arrDoc = '';
                                            $arrImg = array();
                                            if(isset($arrDatos[$num])){ 
                                                if(isset($arrDatos[$num][0])){ 
                                                    $arrDoc = explode(":", $arrDatos[$num][0]);                                                    
                                                }
                                                if(isset($arrDatos[$num][1])){ 
                                                    $arrImg = explode(":", $arrDatos[$num][1]);
                                                }
                                            }
                                        
                                            ?>
                                            <tr id="<?=$num?>">
                                                <th><?=$num?></th>
                                                <td><?=$data[0]?></td>
                                                <td><?=$data[1]?></td>
                                                <td><?=$data[2]?></td>
                                                <td><?=$data[3]?></td>
                                                <td><?=$data[4]?></td>
                                                <td><?=$data[5]?></td>
                                                <td class="text-center">
                                                    <?php  
                                                    if($data[6]){  ?>
                                                       
                                                        <span class="iconify" data-icon="akar-icons:circle-check" data-inline="false" style="color: GREEN;"></span>
                                                    <?php } ?> 
                                                </td>
                                                <td class="text-center">
                                                    <?php if($data[7]){ ?>
                                                        <span class="iconify" data-icon="akar-icons:circle-check" data-inline="false" style="color: GREEN;"></span>
                                                    <?php } ?> 
                                                </td>
                                                <td class="text-center">
                                                    <?php if($data[8]){ ?>
                                                        <span class="iconify" data-icon="akar-icons:circle-check" data-inline="false" style="color: GREEN;"></span>
                                                    <?php } ?> 
                                                </td>
                                                <td class="text-center">
                                                    <?php if($data[9]){ ?>
                                                        <span class="iconify" data-icon="akar-icons:circle-check" data-inline="false" style="color: GREEN;"></span>
                                                    <?php } ?> 
                                                </td>
                                                <td class="text-center">
                                                    <?php if($data[10]){ ?>
                                                        <span class="iconify" data-icon="akar-icons:circle-check" data-inline="false" style="color: GREEN;"></span>
                                                    <?php } ?> 
                                                </td>
                                                <td class="text-center">
                                                    <?php if($data[11]){ ?>
                                                        <span class="iconify" data-icon="akar-icons:circle-check" data-inline="false" style="color: GREEN;"></span>
                                                    <?php } ?> 
                                                </td>
                                                <td class="text-center">
                                                    <?php if($data[12]){ ?>
                                                        <span class="iconify" data-icon="akar-icons:circle-check" data-inline="false" style="color: GREEN;"></span>
                                                    <?php } ?> 
                                                </td>
                                                <td>
                                                    <?php 
                                                    if(!empty($arrDoc)){ 
                                                        foreach($arrDoc as $file){ ?>
                                                            <a href="storage/data/<?=$file?>" target="_blank">Descargar</a>
                                                    <?php 
                                                        }
                                                    } 
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php  foreach($arrImg as $imagen){ ?>
                                                        <img alt="<?=$imagen?>" class="clicleable" width="85" height="45" src="storage/img/<?=$imagen?>" onclick="mostrarImg('<?=$data[0]?>', 'storage/img/<?=$imagen?>')" loading="lazy">
                                                    <?php } ?>
                                                </td>
                                            </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>


        </section>

        <div class="col-12 contador-descargas" >
            <p> Contador de descargas: 10000</p>
        </div>

        <div class="push"></div>
        
        

        <div class="aviso-cookies" id="aviso-cookies">
		<h3 class="titulo">Políticas de uso</h3>
		<p class="parrafo">Para descargar los registros de la aceleración debe estar de acuerdo con las políticas de uso. </p>
        <p> Contenido: Archivos de aceleración proporcionados en el formato ascii estándar ASA2.0 pertenecen a la red acelerográfica del 
            Instituto de Ingeniería y NO PUEDEN SER REDISTRIBUIDOS en su forma original o modificada.</p>
        <p> Citar: Al utilizar los datos proporcionados se solicita incluir en las publicaciones, reportes o trabajos la siguiente cita: “Los registros acelerográficos proporcionados han sido producto de las labores de instrumentación y procesamiento de la Red Acelerográfica de la Universidad Autónoma Metropolitana”.</p>
		<button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
		<a class="enlace" href="aviso-cookies.html">Políticas</a>
	</div>
	<div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>


    </div>
    
    <!-- contenido -->
    
    <!-- The Modal -->
    <div class="modal" id="modalRegistro">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 id="modalRegistroTitulo" class="modal-title"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div id="modalRegistroBody" class="modal-body">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>

            </div>
        </div>
    </div>
    <!-- The Modal -->




    <!-- footer -->
    <?php include_once('views/footer.php'); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="assets/js/ra-uam.js"></script>
    <script src="assets/js/aviso-cookies.js"></script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

</body>

</html>