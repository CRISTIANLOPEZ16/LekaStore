<?php 
/**
 * summary
 */
class Proveedor
{
    public $nombre="";
    public $tipoProducto="";
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
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoProducto()
    {
        return $this->tipoProducto;
    }

    /**
     * @param mixed $tipoProducto
     *
     * @return self
     */
    public function setTipoProducto($tipoProducto)
    {
        $this->tipoProducto = $tipoProducto;

        return $this;
    }
}
 ?>