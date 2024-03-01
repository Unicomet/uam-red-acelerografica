<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes - Red Acelerográfica UAM</title>
    <meta name="description" content="Preguntas Frecuentes (FAQ) de la red acelerográfica UAM">

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
                    <h1>Preguntas Frecuentes (FAQ)</h1>
                    <h3>Red Acelerográfica UAM</h3>
                </div>

                <div class="col-10 offset-1 mt-3">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    ¿Qué es un sismo?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                    Un <strong>sismo</strong> es un rompimiento repentino de las rocas en el interior de la Tierra. Esta liberación repentina de energía se propaga en forma de ondas que provocan el movimiento del terreno.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    ¿Qué es un acelerograma?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    El acelerograma es el registro de la aceleración en función del tiempo, en un sitio específico, que puede ser una estación localizada en campo libre, en un pozo, o alguna estructura como un edificio, un puente o una presa. Es registrado por los acelerógrafos. Generalmente registran en dos componentes horizontales ortogonales y otra componente vertical. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ¿Para que se usan los acelerogramas
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Los acelerogramas se utilizan en el análisis dinámico de estructuras, cuando se diseñan construcciones irregulares, cuando se espera que los modos superiores de las estructuras sean excitados, y cunado se requieren análisis dinámicos inelásticos en estructuras diseñadas para niveles altos de ductilidad. También son utilizados en estudios de Riesgo Sísmico.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                ¿Qué es el Peligro Sísmico?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    El peligro sísmico (o amenaza sísmica) de una región es la probabilidad de que se produzcan en esa zona movimientos del suelo de cierta importancia en un periodo determinado de tiempo. Da una idea de la probabilidad de que se produzcan altas aceleraciones del suelo. A diferencia del Riesgo Sísmico, que se refiere a la probabilidad de ocurrencia de pérdidas materiales o daños ocasionados por sismos (depende de factores antrópicos).
                                </div>
                            </div>
                        </div>
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
                    <p>&copy; UAM AZCAPOTZALCO <?=date('Y');?></p>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="assets/js/ra-uam.js"></script>
</body>
</html>