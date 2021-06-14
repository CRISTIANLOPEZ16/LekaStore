<?php /**
 * summary
 */
class Empleado extends Persona
{
    public $fechaEmpleo=null;
    public $listaFacturas=Array();
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
    public function getFechaEmpleo()
    {
        return $this->fechaEmpleo;
    }

    /**
     * @param mixed $fechaEmpleo
     *
     * @return self
     */
    public function setFechaEmpleo($fechaEmpleo)
    {
        $this->fechaEmpleo = $fechaEmpleo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getListaFacturas()
    {
        return $this->listaFacturas;
    }

    /**
     * @param mixed $listaFacturas
     *
     * @return self
     */
    public function setListaFacturas($listaFacturas)
    {
        $this->listaFacturas = $listaFacturas;

        return $this;
    }
} 



?>