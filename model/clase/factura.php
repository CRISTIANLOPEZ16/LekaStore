<?php 
/**
  * summary
  */
 class Factura
 {
    public $idFactura=0;
    public $idEmpleado=0;  
    public $fechaFactura=null; 
    public $totalFactura=0; 
    public $listaProducto=Array();
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
    public function getIdFactura()
    {
        return $this->idFactura;
    }

    /**
     * @param mixed $idFactura
     *
     * @return self
     */
    public function setIdFactura($idFactura)
    {
        $this->idFactura = $idFactura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * @param mixed $idEmpleado
     *
     * @return self
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaFactura()
    {
        return $this->fechaFactura;
    }

    /**
     * @param mixed $fechaFactura
     *
     * @return self
     */
    public function setFechaFactura($fechaFactura)
    {
        $this->fechaFactura = $fechaFactura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalFactura()
    {
        return $this->totalFactura;
    }

    /**
     * @param mixed $totalFactura
     *
     * @return self
     */
    public function setTotalFactura($totalFactura)
    {
        $this->totalFactura = $totalFactura;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getListaProducto()
    {
        return $this->listaProducto;
    }

    /**
     * @param mixed $listaProducto
     *
     * @return self
     */
    public function setListaProducto($listaProducto)
    {
        $this->listaProducto = $listaProducto;

        return $this;
    }
} 

 ?>