<?php

    class App
    {
        public function __construct(){
            $url=$_GET["url"];
            $dato=$_GET["id"];
            $url= rtrim($url,'/');
            $url= explode('/',$url);
            if ($url[0]=="" or $url[0]=="index") {
                $fileController="controller/home.php";
                require_once $fileController;
                if (isset($url[1])) {
                    $controller = new Home("x");
                    $controller->loadModel("homeModel");
                    $controller->{$url[1]}();    
                }else{
                    $controller = new Home();    
                }

            }else if ($url[0]=="tienda") {
                $fileController="controller/".$url[0].".php";    
                require_once $fileController;
                if (isset($url[1])) {
                    $controller = new $url[0]("x");
                    $controller->loadModel($url[0]."Model");
                    $controller->{$url[1]}($url[2]);    
                }else{
                    $controller = new $url[0]("x");
                    $controller->loadModel($url[0]."Model");
                    $controller->cantidadProductos();
                }

            }else if ($url[0]=="detalle") {
                $fileController="controller/".$url[0].".php";    
                require_once $fileController;
                if (isset($url[1])) {
                    $controller = new $url[0]();
                    $controller->loadModel($url[0]."Model");
                    $controller->extraerProducto($url[1]);
                }
            }else if ($url[0]=="panelCliente") {
                $fileController="controller/".$url[0].".php";    
                require_once $fileController;
                if (isset($url[1])) {
                    $controller = new $url[0]();
                    $controller->loadModel("otro");
                    $controller->{$url[1]}();    
                }else{
                    $controller = new $url[0]();
                    $controller->loadModel("panelClienteModel");
                    $controller->extraerPedidos();
                }
            }else{
                $fileController="controller/".$url[0].".php";    
                if (file_exists($fileController)) {
                    require_once $fileController;
                    if (isset($url[1])) {
                        $controller = new $url[0]("x");
                        $controller->loadModel($url[0]."Model");
                        $controller->{$url[1]}();    
                    }else{
                        $controller = new $url[0]();
                    }

                }else{
                    $controller= new Fail();

                }
            }
            

        }

    }
?>