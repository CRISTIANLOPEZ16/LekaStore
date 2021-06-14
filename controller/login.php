<? 

class Login extends Controller
{
    /**
     * este es el controlador par los productos de inicio y el contenido plano
     * summary
     */
    public function __construct()
    {	
    	parent::__construct();
    	$this->view->render("/login/login");
    }
}



 ?>