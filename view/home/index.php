<!DOCTYPE html>
<html lang="en">
<head>
    <? require("view/header.php");?>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
    <link class="logo" rel="icon" href="<?php echo constant('URL');?>public/img/logo.jpg">
    <title>Inicio | Leka Store</title>
</head>
<body>
<? require("view/barra.php") ?>
  <!--Carousel -->
  <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
    <ul class="carousel-indicators ">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-caption  " >
      <div class="container py-3 " id="ca">
        <h1>LEKA STORE</h1>
        <p>Un mundo de variedad</p>
        <a href="html/tienda.html"><input type="submit" value="Comprar" class="btn solidf col-sm-4 mb-4"/></a>
      </div>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo constant('URL');?>public/img/reloj.png" class=" w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo constant('URL');?>public/img/aretes.png" class=" w-100" alt="">
      </div>
      <div class="carousel-item">
        <img src="<?php echo constant('URL');?>public/img/collar.png" class=" w-100" alt="">
      </div>
    </div>

    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
<!--/.Carousel -->

<div class="container text-center py-5">
  <h1>Para tí</h1>
</div>
<div class="container mb-5">
  <div class="row" id="productosRand">
  </div>
</div>
<? require("view/footer.php") ?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> 
    <script type="text/javascript" src="<?php echo constant('URL');?>public/js/homePage.js?14"></script>
</body>
</html>