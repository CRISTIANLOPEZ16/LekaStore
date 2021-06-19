<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
  * summary
  */
 class Pedido
 {
    public $idPedido=0;
    public $idCliente=0;
    public $fechaPedido=null;
    public $totalPedido=0;
    public $descuento=0;
    public $total=0;
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
    public  function __construct5($idPedido,$fechaPedido,$totalPedido,$descuento,$total){
        $this->setIdPedido($idPedido);
        $this->setFechaPedido($fechaPedido);
        $this->setTotalPedido($totalPedido);
        $this->setDescuento($descuento);
        $this->setTotal($total);
     } 
    /**
     * @return mixed
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }

    /**
     * @param mixed $idPedido
     *
     * @return self
     */
    public function setIdPedido($idPedido)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * @param mixed $idCliente
     *
     * @return self
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaPedido()
    {
        return $this->fechaPedido;
    }

    /**
     * @param mixed $fechaPedido
     *
     * @return self
     */
    public function setFechaPedido($fechaPedido)
    {
        $this->fechaPedido = $fechaPedido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalPedido()
    {
        return $this->totalPedido;
    }

    /**
     * @param mixed $totalPedido
     *
     * @return self
     */
    public function setTotalPedido($totalPedido)
    {
        $this->totalPedido = $totalPedido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * @param mixed $descuento
     *
     * @return self
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;

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