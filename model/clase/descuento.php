<?php 

/**
 * summary
 */
class Descuento	
{
    public $id=0;
    public $descripcion="";
    public $procentajeDescuento=0;
    public function __construct()
    {
        
    }
    

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     *
     * @return self
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProcentajeDescuento()
    {
        return $this->procentajeDescuento;
    }

    /**
     * @param mixed $procentajeDescuento
     *
     * @return self
     */
    public function setProcentajeDescuento($procentajeDescuento)
    {
        $this->procentajeDescuento = $procentajeDescuento;

        return $this;
    }
}

 ?>