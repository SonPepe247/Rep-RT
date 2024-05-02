<!DOCTYPE html>
<html lang="en">

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
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/cdnjs.cloudflare.com_ajax_libs_animate.css_4.1.1_animate.css">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="sistemanotripuladobody">


  <?php
  require_once('includePHP/giratorio.php');
  require_once('includePHP/navbar.php');


  ?>

  <div id="particles-js">

  </div>
  <!-- Inicio Carrusel -->
  <div style="position: relative; top:-50px" class="container-fluid px-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100 sistemaDeVueloNoTripuladoImagen" src="img/cctv.jpg" alt="Image">
          <div class="carousel-caption">
            <div class="container">
              <div class="row d-flex align-items-start flex-column">
                <div class="col-lg-8 text-start">
                  <h1 style="position: relative; top:30px" class="display-1 mb-5 animated slideInRight sistemaDeVueloNoTripulado col-lg-8 text-center"><br><br><br> <span class="typed"></span></h1>

                </div>
              </div>
            </div>
          </div>
        </div>



        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">

          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">

          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!-- Fin Carrusel -->
  <br>
  <br>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <h1 class="text-center slideInRight">¿Por qué implementar un sistema de circuito cerrado de TV?</h1>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="card mb-12" style="max-width: 1540px;">
      <div class="row g-0">
        <div class="col-md-6 ">
          <img src="img/camaracctv.jpg" class="img-fluid rounded-start droneeeee" alt="...">
        </div>
        <div class="col-md-6">
          <div class="card-body">

            <p class="card-text"><strong style="color:#02245b;font-size:17px;">1. Vigilancia y Monitorización en Tiempo Real:</strong>
              Los sistemas de circuito cerrado de televisión (CCTV) posibilitan la vigilancia y monitorización en tiempo real de áreas críticas, brindando una herramienta esencial para garantizar la seguridad en entornos como aeropuertos, estaciones de tren, hospitales y zonas industriales. La capacidad de supervisar activamente estas ubicaciones se vuelve crucial para mantener un entorno seguro y protegido.<br><br>
              <strong style="color:#02245b;font-size:17px;">2. Seguridad y Prevención de Delitos:</strong>
              La razón más común para implementar un sistema de CCTV es aumentar la seguridad. La presencia de cámaras de seguridad puede disuadir a posibles intrusos y actuar como una medida preventiva contra el robo, el vandalismo y otros delitos.
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br><br>
  <br><br><br><br><br>


  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <script src="js/cctv-titulo.js"></script>

  <script src="js/particles.min.js"></script>
  <script>
    particlesJS(

      {
        "particles": {
          "number": {
            "value": 30,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "2a5990"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 5
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 3,
            "random": true,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 150,
            "color": "#2a5990",
            "opacity": 0.4,
            "width": 1
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": true,
              "mode": "repulse"
            },
            "onclick": {
              "enable": true,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      }
    )
  </script>


  <?php


  require_once('includePHP/footer.php');
  require_once('includePHP/copyright.php');
  require_once('includePHP/libreriajavascript.php');

  ?>




</body>

</html>