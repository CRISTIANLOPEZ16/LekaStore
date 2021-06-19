<?php 
require("producto.php");

/**
 * summary
 */
class Maquillaje extends Producto
{
    public $fechaVencimiento="";
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
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * @param mixed $fechaVencimiento
     *
     * @return self
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

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