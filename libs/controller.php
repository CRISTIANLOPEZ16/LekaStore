<?php 

/**
  * summary
  */
 class Controller 
 {
     /**
      * summary
      */
     public function __construct()
     {
        $this->view=new View();
        if ($_POST) {
            $this->data=$_POST['data'];
        }
     }

     function loadModel($model){
     	$url="model/".$model.".php";
     	if (file_exists($url)) {
     		require($url);
     		$modelName=$model;
     		$this->model= new $modelName;
     	}
     }

 } 

 ?>