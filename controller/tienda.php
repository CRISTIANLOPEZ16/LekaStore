<?

/**
 * summary
 */
class Tienda extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->view->render("/tienda/tienda");
        echo "controlador producto";
    }

    public function comprar(){
        echo " compro el prducto";
    }
}


 ?>