<?php 
/**
 * clase que identifica a los productos y la cantidad de ellos 
 * referenciando los con sus proveedores y sus precios
 */
class producto 
{
    private $nombre="";
    private $cantidad=0;
    private $existencia="";
    private $precioUnidad="";
    private $idProveedor=0;
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
