<?php 
require_once("persona.php");
    /**
     * clase para el dueño de la tienda que permite registrar proveedores,vendedores
     * solicitar reportes mensuales,semanales y diarios.
     * listar la cantidad de productos dentro de su tienda y conocer la existencia de estos
     * 
     */
    class administrador extends persona 
    {

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