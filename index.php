<?php
   $pg = "inicio";

   ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

   date_default_timezone_set("America/Argentina/Buenos_Aires");
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo-fondo.png" type="image/x-icon">
    <title>Home</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/js/fontawesome.min.js">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="inicio" class="d-flex flex-column h-100">
    <header>
       <?php include_once("menu.php"); ?>
    </header>
    <main>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                    <img src="./images/carrusel4.jpg" class="d-block w-100 object-fit-cover" alt="...">
                    <!--<div class="carousel-caption d-none d-md-block">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, repellendus.</p>
                    </div>-->
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="./images/carrusel3.jpg" class="d-block w-100 object-fit-cover" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./images/carrusel2.jpg" class="d-block w-100  object-fit-cover" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./images/carrusel-1.jpg" class="d-block w-100  object-fit-cover" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="./images/carrusel5.jpg" class="d-block w-100  object-fit-cover" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-caption">
                <h3 class="somos">Somos <img src="images/LOGOEDIT1-768x101.png" alt="logo" width="300" height="75" class="d-inline-block img-logo logo-lg"></h3>
                <h3>Soluciones en tecnología, voz y datos.</h3>
            </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h1 class="pb-2">¿Qué hacemos?</h1>
            <h4 class="pt-3">Somos una empresa dedicada al diseño y gestión de</h4>
            <h4>soluciones integrales en telecomunicaciones, ciberseguridad, redes, informática,</h4>
            <h4>energía y seguridad física.</h4>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <h5>Nuestros servicios</h5>
          </div>
        </div>
        <div class="row hipervinculos mb-4">
          <div class="col-6 col-sm-4">
            <div class="row">
              <div class="col-12 iconos-servicios">
                <a href="marketing.php"><i class="fa-solid fa-bullhorn"></i></a>
              </div>
              <div class="col-12">
                  <h6>Marketing digital</h6>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="row">
              <div class="col-12 iconos-servicios">
                <a href="ciberseguridad.php"><i class="fa-solid fa-lock"></i></a>
              </div>
              <div class="col-12">
                  <h6>Ciberseguridad</h6>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="row">
              <div class="col-12 iconos-servicios">
                <a href="sistemas.php"><i class="fa-solid fa-video"></i></a>
              </div>
              <div class="col-12">
                  <h6>Sistemas de observación</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row hipervinculos mb-4">
          <div class="col-6 col-sm-4">
            <div class="row">
              <div class="col-12 iconos-servicios">
                <a href="informatica.php"><i class="fa-solid fa-laptop"></i></a>
              </div>
              <div class="col-12">
                  <h6>Informática</h6>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="row">
              <div class="col-12 iconos-servicios">
                <a href="redes.php"><i class="fa-solid fa-network-wired"></i></a>
              </div>
              <div class="col-12">
                  <h6>Redes</h6>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-4">
            <div class="row">
              <div class="col-12 iconos-servicios">
                <a href="telecomunicaciones.php"><i class="fa-solid fa-tower-broadcast"></i></a>
              </div>
              <div class="col-12">
                <h6>Telecomunicaciones</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="whatsapp-link">
          <a href="https://api.whatsapp.com/send?phone=5492974200925" target="_blank" title="Chatea por WhatsApp"><i class="fa-brands fa-square-whatsapp ic-wsp"></i></a>
        </div>
    </main>
    <footer class="container-fluid mt-5 pt-5 logo-footer foot">
      <div class="row pb-4">
        <div class="col-12">
          <a href="https://netargentina.com.ar/">
            <img src="images/LOGOEDIT1-768x101.png" alt="logo" width="230" height="45" class="d-inline-block align-text-top img-logo">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-4 iconos-footer">
          <div class="row">
            <div class="col-12">
              <h2>Buenos Aires</h2>
            </div>
            <div class="col-12 pt-2">
              <p class="info"><i class="fas fa-map-marker-alt icono-f"></i> Bacacay 2122 5 piso Dto. E <br> (1406) C.A.B.A. Argentina</p>
              <p class="info"><i class="fas fa-phone-alt icono-f"></i> +54 11 2343 3116</p>
              <p class="info"><i class="fas fa-envelope icono-f"></i> info@netargentina.com.ar</p>    
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 iconos-footer px-4">
          <div class="row">
            <div class="col-12">
              <h2>Comodoro Rivadavia</h2>
            </div>
            <div class="col-12 pt-2">
              <p class="info"><i class="fas fa-map-marker-alt icono-f"></i> Alte. Brown 653 2 piso (9000) Comodoro Rivadavia – Argentina</p>
              <p class="info"><i class="fas fa-phone-alt icono-f"></i> +54 9 297 420 0925</p>
              <p class="info"><i class="fas fa-envelope icono-f"></i> info@netargentina.com.ar</p>    
            </div>
        </div>
        </div>
        <div class="col-12 col-sm-4 iconos-footer px-4">
          <div class="row">
            <div class="col-12">
              <h2>Servicios</h2>
            </div>
            <div class="col-12 pt-2">
                <div class="row">
                   <div class="col-6">
                     <p class="info"><i class="fa-solid fa-bullhorn icono-f"></i> Marketing Digital</p>
                     <p class="info"><i class="fa-solid fa-video icono-f"></i> Sistemas de observación</p>
                     <p class="info"><i class="fa-solid fa-lock icono-f"></i> Ciberseguridad</p>  
                   </div>
                   <div class="col-6">
                     <p class="info"><i class="fa-solid fa-code-branch icono-f"></i> Informática</p>
                     <p class="info"><i class="fa-solid fa-network-wired icono-f"></i> Redes</p> 
                     <p class="info"><i class="fa-solid fa-tower-broadcast icono-f"></i> Telecomunicaciones</p>
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</div>
</body>
</html>