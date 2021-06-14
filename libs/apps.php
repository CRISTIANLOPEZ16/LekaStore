<?php

    class App
    {
        public function __construct(){
            $url=$_GET["url"];
            $url= rtrim($url,'/');
            $url= explode('/',$url);
            if ($url[0]=="" or $url[0]=="index") {
                $fileController="controller/home.php";
                require_once $fileController;
                $controller = new Home();
            }else{
                $fileController="controller/".$url[0].".php";    
                if (file_exists($fileController)) {
                    require_once $fileController;
                    $controller = new $url[0];
                    if (isset($url[1])) {
                        $controller->{$url[1]}();
                    }
                }else{
                    $controller= new Fail();
                }
            }
            

        }

    }
?>