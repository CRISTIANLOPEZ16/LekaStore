<?

/**
 * summary
 */
class Detalle extends Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function extraerProducto($sku){        
        
        $producto = $this->model->pedirProducto($sku);
        $this->view->nombre=$producto->nombre;
        $this->view->url=$producto->fotos[0]->url;
        $this->view->descripcion=$producto->descripcion;
        $this->view->precio=$producto->precio;
        $this->view->cantidadDisponible=$producto->cantidadDisponible;
        $this->view->sku=$producto->sku;
        $this->view->render("/detalle/detalle");

    }
    
}


 ?>