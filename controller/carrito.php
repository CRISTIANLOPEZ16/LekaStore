<? 

class Carrito extends Controller
{
    /**
     * este es el controlador par los productos de inicio y el contenido plano
     * summary
     */

    public function __construct(){
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor ='__construct'.$num_params;
        if (method_exists($this,$funcion_constructor)) {
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }
    public  function __construct0(){
        parent::__construct();
        $this->view->render("/carrito/carrito");
     }
     public  function __construct1($x){
        parent::__construct();
        
     }
    public function obtenerCarrito(){     
        $datos=json_decode($this->data);
        $productos=$datos->productos;
        $cantidad=$datos->cantidad;
        $tamano = count($cantidad);
        $info=Array();
        for ($i = 0; $i < $tamano; ++$i){
            $id=$productos[$i];
            $cant=$cantidad[$i];
            array_push($info, $this->model->infoProducto(['id'=>$id,'cantidad'=>$cant]));
        }
        echo json_encode(array("estado" => 1,"info"=>$info));

    }

}



 ?>