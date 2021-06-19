<? 

class Login extends Controller
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
        $this->view->render("/login/login");
     }
     public  function __construct1($x){
        parent::__construct();
    }
    public function validarUsuario(){
      $arreglo=json_decode($this->data);
      if ($arreglo->email=="" or $arreglo->pass=="") {
         echo json_encode(array("estado" => 0));
      }else{
        echo $this->model->valida($arreglo->email,$arreglo->pass);
      }
      
      
    }
}



 ?>