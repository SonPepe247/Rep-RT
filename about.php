<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Rocktech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <?php
    #require_once('includePHP/barrasuperior.php');
    require_once('includePHP/navbar.php');
    ?>

    <!-- Sección superior con fondo de imagen -->
    <div class="bg-top" style="background-image: url('img/dron-banner-2.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="fw-medium text-uppercase text-primary mb-2"></p>
                    <h1 style="color:white !important; position:relative; top:50px !important" class="display-5 mb-5">Quiénes Somos</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Resto de tu contenido -->
    <div style="position:relative; left: 0px; margin-top:160px" class="card mb-3 imagen__about__card" style="max-width: 1540px;">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="img/IMAGENABOUT.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">ROCKTECH: Innovación y Experiencia en Seguridad Electrónica y Telecomunicaciones</h5>
                    <p class="card-text">
                        En la vanguardia de la industria, ROCKTECH se distingue como una empresa conformada por profesionales altamente capacitados en las disciplinas de electrónica e informática, acumulando más de dos décadas de experiencia especializada en las áreas de seguridad electrónica y telecomunicaciones.
                        La excelencia es el pilar de nuestro compromiso, respaldada por un equipo de expertos con múltiples certificaciones que aseguran un conocimiento profundo y actualizado en estas disciplinas en constante evolución. Nos enorgullece ser líderes en la implementación de soluciones avanzadas que abarcan desde la integración de sistemas hasta tecnologías de vanguardia como la lectura de placa patente, reconocimiento facial y soluciones térmicas, entre otros.
                        Lo que nos distingue aún más es nuestra capacidad única de ofrecer soluciones integrales. ROCKTECH se destaca por su enfoque multidisciplinario, permitiéndonos acompañar a nuestros clientes a lo largo de todo el ciclo de vida de sus proyectos. Desde la fase inicial de diseño hasta el montaje y la puesta en marcha, nos comprometemos a proporcionar soluciones que no solo cumplen con las expectativas, sino que las superan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- ... Contenido del modal ... -->
    </div>
    <!-- Video Modal End -->

    <?php
    require_once('includePHP/footer.php');
    require_once('includePHP/copyright.php');
    require_once('includePHP/libreriajavascript.php');
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
