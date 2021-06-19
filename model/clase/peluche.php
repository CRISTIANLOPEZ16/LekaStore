<?php 
require("producto.php");

/**
 * summary
 */
class Peluche extends Producto
{
    public $textura="";
    public $color="";
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
    public function getTextura()
    {
        return $this->textura;
    }

    /**
     * @param mixed $textura
     *
     * @return self
     */
    public function setTextura($textura)
    {
        $this->textura = $textura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
 ?>