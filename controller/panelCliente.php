<? 

class PanelCliente extends Controller
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
        session_start();
        if (isset($_SESSION['usuario'])) {
            parent::__construct();
            $cliente=json_decode($_SESSION['usuario']);
            $this->view->nombre=$cliente->nombre;
            $this->view->apellido=$cliente->apellido;
        }else{
            header("Location: /");
        }
        
     }
     public  function __construct1($x){
        parent::__construct();
        
     }
     public function cerrarSesion(){
        header("Location: /");
        session_destroy();
     }

    public function extraerPedidos(){
        $cliente=json_decode($_SESSION['usuario']);
        $pedidos=$this->model->taerPedidos($cliente->id);
        $this->view->pedidos=$pedidos;
        $this->view->render("panelCliente/panelCliente");
    } 
}

 ?>