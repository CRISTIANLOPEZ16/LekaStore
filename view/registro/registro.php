<!DOCTYPE html>
<html lang="en">
<head>
   <? require("view/header.php");?>
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/style2.css">
  <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
  <link class="logo" rel="icon" href="<?php echo constant('URL');?>public/img/logo.jpg">
  <title>Registrate | Leka Store</title>
</head>

<body style="overflow: auto;">
     <!--Navbar -->
<? require("view/barra.php") ?>
<!--/.Navbar -->
  <img class="wave" src="<?php echo constant('URL');?>public/img/image2.png">
  <div class="container">
    <div class="img">
      <img src="<?php echo constant('URL');?>public/img/undraw_well_done_i2wr.svg">
    </div>
    <div class="login-content">
      <form id="registro" action="<?php echo constant('URL');?>registro/registrarCliente" method="POST">
        <img src="<?php echo constant('URL');?>public/img/undraw_profile_pic_ic5t.svg">
        <h2 class="title">Registrate</h2>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>

          <div class="div">
            <input type="text" class="input" name="nombre" placeholder="Nombres*" required>
          </div>
        </div>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <input type="text" class="input" name="apellido"  placeholder="Apellidos*" required>
          </div>
        </div>
        <div class="input-div one">
          <div class="i">
            <i class="far fa-address-card"></i>
          </div>
          <div class="div">
            <input type="text" class="input" name="cedula"  placeholder="Cedula*" required>
          </div>
        </div>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-phone-alt"></i>
          </div>
          <div class="div">
            <input type="text" class="input" name="celular"  placeholder="Teléfono Celular*" required>
          </div>
        </div>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <input type="text" class="input" name="direccion"  placeholder="Dirección*" required>
          </div>
        </div>
        <div class="input-div one">
          <div class="i">
            <i class="fas fa-envelope"></i>
          </div>
          <div class="div">
            <input type="email" class="input" name="correo" placeholder="Correo*" required>
          </div>
        </div>

        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <input id=key type="password" class="input" name="password" placeholder="Contraseña*" required>
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <input id="key2" type="password" class="input" placeholder="Confirmar Contraseña*" required>
          </div>

        </div>
        <div id="error" class="alert alert-danger ocultar" role="alert">
              Las Contraseñas no coinciden, vuelve a intentarlo!
          </div>
        <input type="submit" class="btn" value="Registrar">
        <a href="/carrito/">Volver</a>
      </form>
    </div>
  </div>
  <!--Footer -->
<? require("view/footer.php") ?>
<!--/.Footer -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="<?php echo constant('URL');?>public/js/app.js"></script>
<script src="<?php echo constant('URL');?>public/js/registro.js"></script>
</body>

</html>