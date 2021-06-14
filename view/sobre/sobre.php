<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sobre Nosotros | Leka Store</title>
    <? require("view/header.php");?>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/page.css">
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/cart.css">
</head>
<body>
<!--Navbar -->
<? require("view/barra.php") ?>
  <!--/.Navbar -->

<!--Contenido -->
<div class="container text-center py-5">
  <h1>Sobre Nosotros</h1>
</div>
<div class="container text-center col-sm-8">
    <p>
        I'm a paragraph. Click here to add your own text and edit me. It’s easy. 
        Just click “Edit Text” or double click me to add your own content and make 
        changes to the font. Feel free to drag and drop me anywhere you like on your page. 
        I’m a great place for you to tell a story and let your users know a little more about you.
    </p>
    <p>
        This is a great space to write long text about your company and your services. 
        You can use this space to go into a little more detail about your company. 
        Talk about your team and what services you provide. 
        Tell your visitors the story of how you came up with the idea for your business 
        and what makes you different from your competitors. Make your company stand out and 
        show your visitors who you are.
    </p>
<div class="row py-5">
    <div class="col-12 col-sm-6 col-md-6 mb-4">
        <img src="../img/tienda.png" class="w-100" alt="">
    </div>
    <div class="col-12 col-sm-6 col-md-6">
        <img src="../img/person.png" class="w-100" alt="">
    </div>
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