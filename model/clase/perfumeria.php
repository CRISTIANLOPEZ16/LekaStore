<?php 
require("producto.php");

/**
 * summary
 */
class Perfumeria extends Producto
{
    public $aroma="";
    public $marca="";
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
    public function getAroma()
    {
        return $this->aroma;
    }

    /**
     * @param mixed $aroma
     *
     * @return self
     */
    public function setAroma($aroma)
    {
        $this->aroma = $aroma;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     *
     * @return self
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
}
 ?>