<!DOCTYPE html>
<html lang="en">
<head>

    <title>Carrito | Leka Store</title>
    <? require("view/header.php");?>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
</head>
<body>
<!--Navbar -->
<? require("view/barra.php") ?>
  <!--/.Navbar -->

<!--Contenido --> 
<div class="container py-5" id="info">
    
    <div class="row">
       <div class="col-12 col-sm-8 mb-5">
         <!--Mi carrito --> 
            <div class="container">
                <p>Mi carrito</p> 
                <hr>
            <div class="row">
                <div class="col-6 col-sm-2">
                    <img src="<?php echo constant('URL');?>public/img/producto.png" class="w-100"  alt="">
                </div>
                <div class="col-6 col-sm-4">
                    RELOJ VINTAGE
                    <br>
                    <br>
                    $25.000
                </div>
                <div class="col-6 col-sm-3 mt-0">
                    <div class="input-fieldd">
                        <input type="number" placeholder="0"/>
                    </div>
                </div>
                <div class="col-4 col-sm-2 ">
                   $25.000
                </div>
                <div class="col-2 col-sm-1 text-center">
                    <i class="bi bi-x-lg"></i>                                                        
                </div>
            </div>
         </div>
        </div>
       <!--/.Mi carrito -->

        <div class="col-12 col-sm-4">
          <!--Resumen pedido --> 
            <div class="container">
                <p>Resumen del pedido</p> 
                <hr>
                <div class="row">
                  <div class="col-8">
                    Subtotal
                  </div>
                  <div class="col-4 text-center">
                    $25.000
                  </div>
                  <div class="col-8 mt-4">
                    Envío
                    <br>
                    Norte de Santader, Colombia
                  </div>
                  <div class="col-4 mt-4 text-center">
                    Gratis
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-8">
                    Total
                  </div>
                  <div class="col-4 mb-4 text-center">
                    $25.000
                  </div>
                </div>
                <div class="btn-compra">
                
                <input type="submit" value=" Finalizar la compra" class="btn solidd"/>
              </div>
            </div>
        </div>
        <!--/.Resumen carrito -->
    </div>
</div>
<!--/.Contenido -->


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