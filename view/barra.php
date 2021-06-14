<!--Navbar -->
<nav class=" navbar navbar-expand-lg navbar-dark secondary-color lighten-1 sticky-top py-4 ">
    <a class="navbar-brand ml-5 text-center" href="/">LEKA STORE</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
      aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto ml-auto  mt-lg-2 text-center">
        <li class="nav-item active">
          <a class="nav-link" href="/">Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo constant('URL');?>tienda/">Tienda</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="servicio/">Servicios</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>sobre/">Sobre Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo constant('URL');?>contacto">Contacto</a>
          </li>
      </ul>
      <ul class="navbar-nav ml-0 nav-flex-icons mr-5">
        <li class="nav-item">
          <a class="nav-link " href="<?php echo constant('URL');?>login/"> <i class="fas fa-user-circle fa-2x"></i> Iniciar Sesión</a>
         </li>
        <li class="nav-item mr-2">
          <a class="nav-link waves-effect waves-light" href="<?php echo constant('URL');?>carrito/">
            <i class="fas fa-shopping-cart fa-2x"></i>
          </a>
        </li>
       </ul>
    </div>
  </nav>
  <!--/.Navbar -->
