<?php 
require_once("clase/producto.php");
/**
 * summary
 */
class detalleModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        
    }
    public function pedirProducto($sku){
    	try {
    	$sql="SELECT nombre,descripcion,precio,cantidadDisponible FROM `producto` WHERE sku=:sku";
    	$statement=$this->conexion->prepare($sql);
    	$statement->bindParam(":sku",$sku,PDO::PARAM_STR);
    	if ($statement->execute()) {
    		$row = $statement->fetch(PDO::FETCH_ASSOC);
			$producto = new Producto($sku,utf8_encode($row["descripcion"]),utf8_encode($row["nombre"]),$row["precio"],$row["cantidadDisponible"]);
			$producto->extraerFotos($this->conexion);
            return $producto;
    	} else{
            return 0;
        }	
    	} catch (Exception $e) {
    		return -1;
    	}
    }

}

 ?>