<?php
require_once("persona.php");
    /**
     * Clase que identifica a proveedor 
     */
    class proveedor extends persona
    {
        private $descripcion="";
        private $cantidadProdComp=0;
        public function __construct(){
            $params = func_get_args();
            $num_params = func_num_args();
            $funcion_constructor ='__construct'.$num_params;
            if (method_exists($this,$funcion_constructor)) {
                call_user_func_array(array($this,$funcion_constructor),$params);
            }
        }
        static  function __construct0(){
            
         }
    }
    
?>