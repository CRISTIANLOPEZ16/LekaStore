<?php 	
require_once("clase/producto.php");
/**
 * 	
 */
class carritoModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
       parent::__construct(); 
    }

    public	function infoProducto($data){
        try {
        $sql="SELECT sku,descripcion,nombre,precio FROM `producto` WHERE sku=:sku";
        $statement=$this->conexion->prepare($sql);
        $statement->bindParam(":sku",$data['id'],PDO::PARAM_STR);
        if ($statement->execute()) {
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $producto = new Producto($row["sku"],json_encode($row["descripcion"]),json_encode($row["nombre"]),$row["precio"],$data['cantidad']);
                $producto->extraerFotos($this->conexion);
                }
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