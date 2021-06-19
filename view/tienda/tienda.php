<!DOCTYPE html>
<html lang="en">
<head>
    <? require("view/header.php");?>
    <title>Tienda | Leka Store</title>
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

<div class="container py-5 text-center">
    <h2>Tienda</h2>
</div>

<div class="container mb-5">
  <div class="row">
    <div class="col-12 col-sm-3">
      Filtrar por
      <hr>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Categoría
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <a class="dropdown-item" href="#">Pulseras</a>
                <a class="dropdown-item" href="#">Collares</a>
                <a class="dropdown-item" href="#">Aretes</a>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Color
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <a class="dropdown-item" href="#">Rojo</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-9">
    
      <div class="input-field mb-4">
        <i class="fas fa-search"></i>
         <input type="text" placeholder="Buscar..." />
    </div>
      <div class="row" id="productos">
      </div>
      
    </div>
  </div>
</div>


<!-- Modal -->
<!--Paginación -->
<div>
  <nav style="background-color: white !important; background: white !important;" aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
      </li>
      <?php $i=1; while($i<=(intval($this->cantidad)/10)){
          echo "<li class='page-item'><a id='$i' class='paginacion page-link' href='https://lekastore.net/tienda/listarProductos/$i'>"."$i"."</a></li>";
          $i++;
        } 
      ?>
      </li>
    </ul>
  </nav>
</div>
<!--Fin de paginacion -->
<!--Footer -->
<? require("view/footer.php") ?>
<!--/.Footer -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo constant('URL');?>public/js/tienda.js?23s"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
</body>
</html>