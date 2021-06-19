<? 

class Registro extends Controller
{
    /**
     * este es el controlador par los productos de inicio y el contenido plano
     * summary
     */
    public function __construct()
    {	
    	parent::__construct();
    	$this->view->render("/registro/registro");
    }

    public function registrarCliente(){ 
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $cedula=$_POST['cedula'];
        $celular=$_POST['celular'];
        $email=$_POST['correo'];
        $clave=$_POST['password'];
        $direccion=$_POST['direccion'];
        $this->model->registrarUsuario(['nombre'=>$nombre,'apellido'=>$apellido,'cedula'=>$cedula,'celular'=>$celular,'email'=>$email,'clave'=>$clave,'direccion'=>$direccion]);
        echo "<script>window.location='https://lekastore.net/carrito/'; </script>";
    }

}



 ?>