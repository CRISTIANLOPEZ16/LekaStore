<!DOCTYPE html>
<html lang="es">
    <head>
        <? require("view/header.php");?>
        <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/css404.css?1">
        <title>Error 404</title>
    </head>
    <body>
        <div class="container-404">
            <h1>404</h1>
            <p>Esta pagina no esta disponible, accede a nuestra tienda por productos fantasticos y estupendas ofertas.</p>
            <a href="<?php echo constant('URL');?>tienda/" class="boton">Tienda</a>
        </div>
        
        <img src="<?php echo constant('URL');?>public/img/undraw_well_done_i2wr.svg">
    </body>
</html>