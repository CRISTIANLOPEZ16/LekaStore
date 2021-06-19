<!DOCTYPE html>
<html lang="en">
<head>

    <title>Carrito | Leka Store</title>
    <? require("view/header.php");?>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
    <link class="logo" rel="icon" href="<?php echo constant('URL');?>public/img/logo.jpg">
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
            <div id="carritoEx" class="row">
            </div>
         </div>
        </div>
       <!--/.Mi carrito -->

        <div class="col-12 col-sm-4">
          <!--Resumen pedido --> 
            <div class="container">
                <p>Resumen del pedido</p> 
                <div id="productos"></div>
                <hr>
                <div class="row">
                  <div class="col-8">
                    Subtotal
                  </div>
                  <div id="subto" class="col-4 text-center">
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
                  <div id="total" class="col-4 mb-4 text-center">
                    $25.000
                  </div>
                </div>
                <div class="btn-compra">
                    <!-- Esto es temporal -->
                    <?php
                    $precio="7500";
                    $rand= rand(00000, 99999);
                    $rand2= rand(000, 999);
                    $id_user="54";
                    $pedido="SKUPE".$rand2;
                    #formato que tendrá será ID de la venta, id del pedido, y un número aleatorio  de 5 digitos.
                    $factura=$id_user.":".$pedido.":".$rand;
                    ?>
                <form name="carrito" action="https://checkout.wompi.co/p/" method="GET">
                  <!-- OBLIGATORIOS -->
                  <input type="hidden" name="public-key" value="pub_test_ubbDGgmi6pSVxv96NP0AMIzdHSnEZOQe"/>
                  <input type="hidden" name="currency" value="COP" />
                  <input type="hidden" id="precio" name="amount-in-cents" value=<?php echo "'".$precio."00'" ?> />
                  <input type="hidden" id="rand" name="reference" value=<?php echo $factura; ?> />
                  <!-- OPCIONALES -->
                  <input type="hidden" name="redirect-url" value="https://lekastore.net/pago&" />
                  
                  <button class="btn solidd" type="submit">Pagar con Wompi</button>
                  <br>
                 <a class="btn solidd" type="submit" href="/registro/">Registrarme</a>
                  <input type="checkbox" name="agree" value="1" onclick="expandir_formulario()" />
                  <label for="agree">¿Ya tienes un usuario?</label>
                </form>
                <div id="capaexpansion" class="capaexpansion">
                <form action="#" name="login" class="sign-in-form">
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
                    <input type="submit" value="Ingresar" class="btn solidd" /></a>
                  </form>
              </div>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src=""></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> 
    <script src="<?php echo constant('URL');?>public/js/registro.js"></script>
    <script src="<?php echo constant('URL');?>public/js/carrito.js"></script>
</body>
</html>