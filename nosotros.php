<?php
   $pg = "nosotros";
   
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
    <title>Nosotros</title>
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
      <div class="row">
        <div class="col-12 pb-sm-4 h1-nos">
          <h1>Sobre nosotros</h1>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-12 mt-3">
          <p class="p-nos">Somos una empresa comprometida con la transformación digital y el desarrollo de proyectos de telecomunicaciones de las organizaciones. Buscamos ser un socio tecnológico estratégico para nuestros clientes. Entender sus retos es nuestro principal objetivo para así ofrecer las mejores soluciones y un excelente servicio a través de una relación a largo plazo. Nos especializamos en redes de voz y datos, cableado estructurado y sistemas de seguridad para el control de acceso.</p>
        </div>
      </div>
      <div class="row banner">
        <div class="row">
          <div class="col-12">
            <h2 class="banner-p">Beneficios de elegir nuestros servicios</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 img-b">
            <img src="./images/banner-nos.jpg" alt="img" class="img-ba">
          </div>
          <div class="col-12 col-sm-6">
            <p class="banner-p-2">Nuestra experiencia, soporte y cordialidad garantizan mejorar la eficiencia, la productividad y las perspectivas de crecimiento de su organización.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 pt-3">
          <p class="redes-s">Estamos en redes sociales</p>
        </div>
      </div>
      <!--<div class="row mb-4 hip-nos">
        <div class="col-12 col-sm-4">
            <div class="row iconos-nosotros">
                <div class="col-12">
                    <a href="https://www.facebook.com/NetArgentinaSA/"><i class="fsocial-icon fa-brands fa-square-facebook"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 ">
            <div class="row iconos-nosotros">
                <div class="col-12">
                    <a href="https://www.instagram.com/netargentinasa/"><i class="fa-brands fa-square-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="row iconos-nosotros">
                <div class="col-12">
                    <a href="https://www.linkedin.com/in/net-argentina-22a33824b/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
      </div>    -->
      <div class="row mb-4 hip-nos">
        <div class="col-4 iconos-nosotros">
            <a href="https://www.facebook.com/NetArgentinaSA/"><i class="fsocial-icon fa-brands fa-square-facebook"></i></a>
        </div>
        <div class="col-4 iconos-nosotros">
            <a href="https://www.instagram.com/netargentinasa/"><i class="fa-brands fa-square-instagram"></i></a>
        </div>
        <div class="col-4 iconos-nosotros">
            <a href="https://www.linkedin.com/in/net-argentina-22a33824b/"><i class="fab fa-linkedin"></i></a>
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
        <div class="col-12 col-sm-4 iconos-footer">
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
        <div class="col-12 col-sm-4 iconos-footer">
          <div class="row">
            <div class="col-12">
              <h2>Servicios</h2>
            </div>
            <div class="col-12 pt-2">
                <div class="row">
                   <div class="col-6">
                     <p class="info"><i class="fa-solid fa-bullhorn icono-f"></i> Marketing Digital</p>
                     <p class="info"><i class="fa-solid fa-video icono-f"></i> Sistemas</p>
                     <p class="info"><i class="fa-solid fa-lock icono-f"></i> Ciberseguridad</p>  
                   </div>
                   <div class="col-6">
                     <p class="info"><i class="fa-solid fa-code-branch icono-f"></i> Informática</p>
                     <p class="info"><i class="fa-solid fa-network-wired icono-f"></i> Redes</p> 
                     <p class="info"><i class="fa-solid fa-tower-broadcast icono-f"></i> Comunicaciones</p>
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