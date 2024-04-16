<nav class="navbar navbar-expand-md barra-nav container-fluid"> <!--navbar-dark bg-dark-->
            <div class="container-fluid mt-2">
              <!--<a class="navbar-brand" href="#">Top navbar</a> #espacio para un logotipo-->
              <div class="row">
                <div class="col-6">
                  <a class="navbar-brand" href="#">
                    <img src="./images/LOGOEDIT1-768x101.png" alt="Logo" width="270" height="45" class="d-inline-block align-text-top img-logo-nav"></a>
                </div>
                <div class="col-6">
                    <!--#boton desplegable-->
                  <button class="navbar-toggler boton-burger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse paginas" id="navbarCollapse">
                     <ul class="navbar-nav me-auto mb-md-0 paginas">
                        <li class="nav-item">
                         <a class="nav-link <?php echo ($pg == "index")? "active":""; ?>" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link <?php echo ($pg == "sobre-mi")? "active":""; ?> " href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item">
                         <a class="nav-link <?php echo ($pg == "contacto")? "active":""; ?> " href="contacto.php">Contacto</a>
                        </li>
                        <!--<li class="nav-item">
                        <a class="nav-link <?php echo ($pg == "tienda")? "active":""; ?>" href="tienda.php">Tienda</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link <?php echo ($pg == "portfolio")? "active":""; ?>" href="portfolio.php">Portfolio</a>
                        </li> -->
                     </ul>
                  </div>
                </div>
              </div>
            </div>
         </nav>