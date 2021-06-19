<!DOCTYPE html>
<html lang="en">
<head>
    <?php ?>
    <title>Contacto | Leka Store</title>
    <? require("view/header.php");?>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
    <link class="logo" rel="icon" href="<?php echo constant('URL');?>public/img/logo.jpg">
</head>
<body>
<!--Navbar -->
<? require("view/barra.php") ?>
  <!--/.Navbar -->

<!--Form -->
<div class="container text-center py-5">
  <h1>Contacto</h1>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col text-center mb-4">
            ¿Tienes alguna pregunta?
            <br>
            ¡Estamos aquí para ayudarte!
            <br>
            <br>
            <b><p>Llámanos al:</p></b>
            313-207-0709
            <br>
            o envíanos un email:
            <br>
            contacto@lekastore.net
        </div>
        <div class="col">
            <form action="#" class="sign-in-form">
                <div class="input-field">
                    <i class="far fa-user"></i>
                   <input type="text" placeholder="Nombre" />
                </div>
                <div class="input-field">
                    <i class="far fa-envelope"></i>
                     <input type="email" placeholder="Email" />
                  </div>
                <div class="input-field">
                    <i class="fas fa-phone"></i>
                   <input type="number" placeholder="Teléfono" />
                </div>
                <div class="input-fieldt">
                    <i class="fas fa-pencil-alt"></i>
                    <textarea   placeholder="Escribe tu mensaje aquí..."></textarea>
                   
                  </div>
                <input type="submit" value="Enviar" class="btn contac" />
              </form>
        </div>
    
    </div>
</div>
 <!--/.Form -->




<!--Footer -->
<? require("view/footer.php") ?>
<!--/.Footer -->





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> 
</body>
</html>