<?php 
 require_once("foto.php");
/**
  * summary
  */
 class Producto
 {
    public $sku=0;
    public $nombre="";
    public $descripcion="";
    public $precio="";
    public $cantidadDisponible=0;
    public $fotos=Array();

 	public function __construct(){
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor ='__construct'.$num_params;
        if (method_exists($this,$funcion_constructor)) {
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }
    public function __construct0(){ 
    }  
    public  function __construct1($sku){ 
        $this->setSku($sku);
    }
    public function __construct4($sku,$descripcion,$nombre,$precio){
        $this->setSku($sku);
        $this->setDescripcion($descripcion);
        $this->setNombre($nombre);
        $this->setPrecio($precio);
     }    
     public function __construct5($sku,$descripcion,$nombre,$precio,$cantidadDisponible){
        $this->setSku($sku);
        $this->setDescripcion($descripcion);
        $this->setNombre($nombre);
        $this->setPrecio($precio);
        $this->setCantidadDisponible($cantidadDisponible);
     }   
    
    /**
     * @return mixed
     */
    public  function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
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
    public  function setNombre($nombre)
    {
        $this->nombre = $nombre;

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
    public  function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     *
     * @return self
     */
    public  function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCantidadDisponible()
    {
        return $this->cantidadDisponible;
    }

    /**
     * @param mixed $cantidadDisponible
     *
     * @return self
     */
    public  function setCantidadDisponible($cantidadDisponible)
    {
        $this->cantidadDisponible = $cantidadDisponible;

        return $this;
    }
    

    /**
     * @return mixed
     */
    public function getFotos()
    {
        return $this->fotos;
    }

    /**
     * @param mixed $fotos
     *
     * @return self
     */
    public  function setFotos($fotos)
    {
        $this->fotos = $fotos;

        return $this;
    }

    public function extraerFotos($conexion){
        try {

            $sql="SELECT f.idFoto,f.url FROM `foto` f INNER JOIN listaFotosProducto lfp on lfp.idFoto=f.idFoto WHERE lfp.idProducto=:sku";
            $statement=$conexion->prepare($sql);
            $statement->bindParam(":sku",$this->sku,PDO::PARAM_STR);
            if ($statement->execute()) {
                $fotos= array();
                while ($row=$statement->fetch(PDO::FETCH_ASSOC)) {
                    $foto= new Foto($row["idFoto"],$row["url"]);
                    array_push($fotos, $foto);
                }
                $this->setFotos($fotos);
            }else{
                $this->setFotos(0);
            }
        } catch (Exception $e) {
                $this->setFotos(-1);
        }
    }


} 
 ?>