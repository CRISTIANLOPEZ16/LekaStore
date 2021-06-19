<?php 
require("producto.php");

/**
 * summary
 */
class Bisuteria extends Producto
{
    public $funcionalidad="";
    public function __construct(){
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor ='__construct'.$num_params;
        if (method_exists($this,$funcion_constructor)) {
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }
    public  function __construct0(){
     }


    /**
     * @return mixed
     */
    public function getFuncionalidad()
    {
        return $this->funcionalidad;
    }

    /**
     * @param mixed $funcionalidad
     *
     * @return self
     */
    public function setFuncionalidad($funcionalidad)
    {
        $this->funcionalidad = $funcionalidad;

        return $this;
    }

   
}
 ?>