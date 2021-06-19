<!DOCTYPE html>
<html lang="en">
  <head>
    <? require("view/header.php");?>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css" />
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/style2.css" />
    <title>Iniciar Sesión | Leka Store</title>
    
  </head>
  <body>
      <? require("view/barra.php") ?>
    <img class="wave" src="<?php echo constant('URL');?>public/img/image.png">
  <div class="container">
    <div class="img">
      <img src="<?php echo constant('URL');?>public/img/undraw_donut_love_kau1.svg">
    </div>
    <div class="login-content">
      <form action="index.html">
        <img src="<?php echo constant('URL');?>public/img/undraw_profile_pic_ic5t (2).svg">
        <h2 class="title">Iniciar Sesión</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <input id="email" type="email" placeholder="Email" class="input">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <input id="pass" type="password" placeholder="Contraseña" class="input">
                 </div>
              </div>
              <a href="#">¿Has olvidado tu contraseña?</a>
              <input id="login" type="submit" class="btn" value="Iniciar sesión">
        <a href="<?php echo constant('URL');?>registro/">Registrate</a>
            </form>
        </div>
    </div>
    
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo constant('URL');?>public/js/login.js?18"></script>
  </body>
</html>
