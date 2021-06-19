<!DOCTYPE html>
<html lang="en">
<head>
    <? require("view/header.php");?>
    <title>Pedidos | Leka Store</title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<style>
   .btnPanel.contac {
    margin: 0;
    background: #77cfcf ;
    border: 2px solid #77cfcf ;
    width: 10%;
    height: 41px ;
    font-weight: 400 ;
    font-size: 1.0rem;
    border-radius: 49px;
    color: #fff !important;
    
  }
  .tablita{
  width: 70%;
  margin: auto;
}

.btoncito{
  text-align: center;
}

.titulito{
 text-align: center;
}
</style>
<!--Navbar -->
<nav class=" navbar navbar-expand-lg navbar-dark secondary-color lighten-1 sticky-top py-4 ">
    <a class="navbar-brand ml-5 text-center" href="../index.html"><?php echo $this->nombre." ".$this->apellido;?></a>
    <button class="navbar-toggler text-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
      aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"  id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto ml-auto  mt-lg-2 text-center">
      </ul>
      <ul class="navbar-nav ml-0 nav-flex-icons mr-5">
        <li class="nav-item">
          <a class="nav-link " href="<?php echo constant('URL');?>panelCliente/cerrarSesion/"> <i class="fas fa-user-circle fa-2x"></i> Cerrar Cesión</a>
         </li>
       </ul>
    </div>
  </nav><br>
  <!--/.Navbar -->

<!--Contenido -->
    <div class="titulito">
        <h2 class="titulo">Lista de pedidos</h2><br>
    </div>
    <div class="tablita">
        <table class="table table-bordered">
            <thead>
                <tr class="table-info border-info">
                    <th scope="col">Ref Pedido</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $pedidos=$this->pedidos;
                    if (count($pedidos)>0) {
                        for($i=0;$i<count($pedidos);$i++){
                        echo "<tr>";
                        echo "<th scope='row'>".$pedidos[$i]->idPedido."</th>";
                        echo "<td>".$pedidos[$i]->fechaPedido."</td>";
                        echo "<td>".$pedidos[$i]->totalPedido."</td>";
                        echo "<td>".$pedidos[$i]->descuento."</td>";
                        echo "<td>".$pedidos[$i]->total."</td>";
                        echo "</tr>";
                    }    
                }else{
                    echo "Este usuario no tiene pedidos disponibles ";
                }
                ?>
            </tbody>
      </table>
    </div>
<!--/.Contenido -->


<!--Footer -->
<div class="footer">
  <div class="container text-center py-4">
  <div class="row">
    <div class="col mb-4">
      <p>SIGUE CONECTADO</p>
      <div class="social-media text-center">
        <a href="#" class="social-icon">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-pinterest-p "></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-google"></i>
        </a>
        <a href="#" class="social-icon">
          <i class="fab fa-instagram"></i>
        </a>
      </div>
    </div>
    <div class="col">
      <p>¿NECESITAS AYUDA?</p>
          313-207-0709
          <br>
          lekastore@gmail.com
    </div>
  </div>
</div>
<div class="container text-center py-2">
  <p>© 2021 hecho para LEKA STORE. Creado por SUPREME</p>
</div>
</div>
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