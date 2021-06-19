<?php 

/**
 * summary
 */
class Stock
{
    public $idProveedor=0;
    public $cantidadComprada=0;
    public $fechaCompra="";
    public function __construct()
    {
        
    }
    /**
     * @return mixed
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * @param mixed $idProveedor
     *
     * @return self
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCantidadComprada()
    {
        return $this->cantidadComprada;
    }

    /**
     * @param mixed $cantidadComprada
     *
     * @return self
     */
    public function setCantidadComprada($cantidadComprada)
    {
        $this->cantidadComprada = $cantidadComprada;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * @param mixed $fechaCompra
     *
     * @return self
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

}
 ?>