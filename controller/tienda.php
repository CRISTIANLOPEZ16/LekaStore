<?
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/**
 * summary
 */
class Tienda extends Controller
{
    /**
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
    public  function __construct1($x){
        parent::__construct();
     }

    public function listarProductos($paginacion){
        echo $this->model->listarProductosTienda($paginacion);
    }

    public function cantidadProductos(){
        $cant=$this->model->cantidadProductos();
        $this->view->cantidad=$cant;
        $this->view->render("tienda/tienda");
    }

}


 ?>