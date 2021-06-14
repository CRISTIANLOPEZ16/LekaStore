<!DOCTYPE html>
<html lang="en">
  <head>
    <? require("view/header.php");?>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/style.css">
    <title>Iniciar Sesión | Leka Store</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Iniciar Sesión</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" />
            </div>
            <a href="" class="has">¿Has olvidado tu contraseña?</a>
            <input type="submit" value="Ingresar" class="btn solid" /></a>
          </form>
          
          <form action="#" class="sign-up-form">
            <h2 class="title">Registrate</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Usuario" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Contraseña" />
            </div>
            <input type="submit" class="btn" value="Registrar" />

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿No te has registrado?</h3>
            <p>
              ¡Bienvenido a Leka Store! Si aún no tienes una cuenta, registrate aquí.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrate
            </button>
          </div>
          <img src="../img/undraw_donut_love_kau1.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tienes tu cuenta?</h3>
            <p>
              Si ya tienes una, puedes iniciar sesión aquí.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar sesión
            </button>
          </div>
          <img src="../img/undraw_well_done_i2wr.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../js/app.js"></script>
  </body>
</html>
