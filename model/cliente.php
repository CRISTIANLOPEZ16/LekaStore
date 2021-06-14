<?php 
/**
 * summary
 */
class Cliente extends Persona
{
    public $direccion="";
    public $favorito=Array();
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


    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     *
     * @return self
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFavorito()
    {
        return $this->favorito;
    }

    /**
     * @param mixed $favorito
     *
     * @return self
     */
    public function setFavorito($favorito)
    {
        $this->favorito = $favorito;

        return $this;
    }
}
 ?>