<!DOCTYPE html>
<html lang="en">
<head>
    <? require("view/header.php");?>
    <title>Detalle | Leka Store</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link class="logo" rel="icon" href="<?php echo constant('URL');?>public/img/logo.jpg">
</head>
<body>
<!--Navbar -->
<? require("view/barra.php") ?>
  <!--/.Navbar -->

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Inicio</a></li>
      <li class="breadcrumb-item"><a href="<?php echo constant('URL');?>tienda/">Tienda</a></li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo utf8_decode($this->nombre)?></li>
    </ol>
  </nav>

<div class="container  py-5">
  <div class="row">
      <div class="col-12 col-sm-6 mb-4">
        <img src="<?php echo constant('URL');?><?php echo $this->url; ?>" class="w-100" alt="">
      </div>
      <div class="col-12 col-sm-6">
        <h2><?php echo utf8_decode($this->nombre)?></h2>
        <p id="sku" class="sku" value="<?php echo $this->sku?>">SKU: <?php echo $this->sku?></p>
      
        <div class="t1 mb-3">
            <b><p>Precio</p></b>
            <br>
            <p id="precio">$<?php echo $this->precio?></p>
        </div>

        <b>Cantidad:</b>
        <div class="input-fieldd mb-4 ml-0 col-sm-2 col-3">
            <input id="cant" type="number" value="1" min="1" max="<?php echo $this->cantidadDisponible?>">
          </div>
          <input type="submit" value="Agregar al Carrito" id="addToCart" class="btn solidd col-sm-8 mb-4"/>
         
          <div class="accordion accordion-flush col-12 ml-0 col-sm-9" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Información del producto
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 <?php echo utf8_decode($this->descripcion);?>
                </div>
              </div>

          </div>
      </div> 
  </div>
</div>
</div>

<!--Footer -->
<? require("view/footer.php") ?>
<!--/.Footer -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>   
  <script src="<?php echo constant('URL');?>public/js/registro.js"></script> 
</body>
</html>