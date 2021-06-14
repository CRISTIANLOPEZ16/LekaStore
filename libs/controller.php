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
     }

     function loadModel($model){
     	$url="model/".$model."model.php";
     	if (isset($url)) {
     		require($url);
     		$modelName=$model."Model";
     		$this->model= new $modelName;
     	}
     }

 } 

 ?>