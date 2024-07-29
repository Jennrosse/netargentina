<?php
$pg = "contacto";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/logo-fondo.png" type="image/x-icon">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/js/fontawesome.min.js">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="contacto" class="d-flex flex-column h-100">
    <header>
      <?php include_once("menu.php"); ?>
    </header>
    <main class="container pb-5">
        <div class="row">
            <div class="col-12 pt-4 pb-4">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p class="p-form">Completa el siguiente formulario y te contactaremos a la brevedad.</p>
            </div>
            <div class="col-12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/WhatsApp" class="form-control shadow">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tu mensaje" class="form-control shadow"></textarea>
                    </div>
                    <div>
                      <button type="submit" class="btn" id="btnEnviar" name="btnEnviar"><a class= "nav-link" href="confirmacion-envio.php">ENVIAR</a></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="whatsapp-link">
          <a href="https://api.whatsapp.com/send?phone=5492974200925" target="_blank" title="Chatea por WhatsApp"><i class="fa-brands fa-square-whatsapp ic-wsp"></i></a>
        </div>
    </main>
    <!--<footer class="container mt-auto pb-5 pt-4">
      <div class="row">
        <div class="col-12">
          <img src="images/LOGOEDIT1-768x101.png" alt="Logo" width="230" height="45" class="d-inline-block align-text-top img-logo">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-4">

        </div>
      </div>
    </footer>-->
    <footer class="container-fluid mt-3 pt-3 logo-footer foot">
      <div class="row pb-3">
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
              <p class="info"><i class="fa-regular fa-comments icono-f"></i> +54 11 2343 3116</p>
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
              <p class="info"><i class="fa-regular fa-comments icono-f"></i> +54 9 297 420 0925</p>
              <p class="info"><i class="fas fa-envelope icono-f"></i> info@netargentina.com.ar</p>    
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 iconos-footer">
          <div class="row">
            <div class="col-12">
              <h2>Redes sociales</h2>
            </div>
            <div class="col-12 pt-2">
                <div class="row">
                   <div class="col-12">
                      <a href="https://www.facebook.com/NetArgentinaSA/" target="_blank"><i class=" fa-brands fa-facebook px-2 info"></i></a>
                      <a href="https://www.instagram.com/netargentinasa/" target="_blank"><i class="fa-brands fa-instagram px-2 info"></i></a>
                      <a href="https://www.linkedin.com/in/net-argentina-22a33824b/?originalSubdomain=ar" target="_blank"><i class="fa-brands fa-linkedin-in px-2 info"></i></a> 
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