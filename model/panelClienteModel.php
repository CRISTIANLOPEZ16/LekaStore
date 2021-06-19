<?php 

require_once("clase/pedido.php");
/**
 * summary
 */
class panelClienteModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function taerPedidos($id){
        try {
        $sql="SELECT `idPedido`,`fechaPedido`,`totalPedido`,`descuento`,`total` FROM `pedido` WHERE `idCliente`=:id";
        $statement=$this->conexion->prepare($sql);
        $statement->bindParam(":id",$id,PDO::PARAM_STR);
        if ($statement->execute()) {
            $pedidos= Array();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                $pedido = new Pedido($row["idPedido"],json_encode($row["fechaPedido"]),json_encode($row["totalPedido"]),$row["descuento"],$row["total"]);
                array_push($pedidos, $pedido);
                }
            return $pedidos;
        } else{
            return 0;
        }
        } catch (Exception $e) {
            return -1;
        }

    }


}

 ?>