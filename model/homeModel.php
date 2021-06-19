<?php 
require_once("clase/producto.php");
/**
 * summary
 */
class homeModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function productosRand(){
    	try {
    	$sql="SELECT sku,descripcion,nombre,precio FROM `producto` ORDER BY RAND() LIMIT 3";
    	$statement=$this->conexion->prepare($sql);
    	if ($statement->execute()) {
    		$productos= Array();
    		while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    			$producto = new Producto($row["sku"],json_encode($row["descripcion"]),json_encode($row["nombre"]),$row["precio"]);
    			$producto->extraerFotos($this->conexion);
			    array_push($productos, $producto);
    			}
            return json_encode(array("estado" => 1,"productos"=>$productos));
    	} else{
            return json_encode(array("estado" => 0));
        }
    	} catch (Exception $e) {
    		return json_encode(array("estado" => -1));
    	}
    }
}
 ?>