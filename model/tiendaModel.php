<?php 	
require_once("clase/producto.php");
/**
 * 	
 */
class tiendaModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
       parent::__construct(); 
    }

    public	function listarProductosTienda($paginacion){
        try {
            if (intval($paginacion)>1) {
                $off=($paginacion*10)-10;
            }else{
                $off=0;
            }
        $sql="SELECT sku,descripcion,nombre,precio FROM `producto` ORDER BY SKU Limit 10 OFFSET  $off";
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

    public function cantidadProductos(){
        try {
        $sql="SELECT COUNT(sku) as Cpro FROM `producto`";
        $statement=$this->conexion->prepare($sql);
        if ($statement->execute()) {
            $row = $statement->fetch(PDO::FETCH_ASSOC);
            return $row["Cpro"];
        } else{
            return 0;
        }
        } catch (Exception $e) {
            return -1;
        }
    }
}

 ?>