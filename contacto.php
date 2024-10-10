<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Red Acelerográfica UAM</title>
    <meta name="description" content="">

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
                    <h1 data-i18n="contact-title">Contacto</h1>
                    <h3>Red Acelerográfica UAM</h3>
                </div>

                <div class="col-10 offset-1 col-lg-8 offset-lg-2 mt-3">
                    <form id="form-contacto" action="enviar-formulario.php" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label" data-i18n="contact-form-name">Nombre:*</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label" data-i18n="contact-form-city">Ciudad:*</label>
                            <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label" data-i18n="contact-form-email">Correo electrónico:</label>
                            <input type="email" class="form-control" id="correo" name="correo" placeholder="xxxxx@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label" data-i18n="contact-form-message">Mensaje:</label>
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
                        </div>

                        <div class="w-100 text-end">
                            <button class="btn btn-outline-danger btn-lg" type="submit" data-i18n="contact-form-submit">ENVIAR</button>
                        </div>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/ra-uam.js"></script>
    <script>
        if (location.href.includes('registro=1')) {
            envioFormulario()
        }
    </script>
</body>

</html>