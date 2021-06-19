<?php 
/**
 * summary
 */
class Persona 
{
	public $id=0;
	public $nombre="";
	public $apellido="";
	public $fechaNacimiento="";
	public $cedula=0;
	public $celular=0;
	public $email="";
	public $clave="";
    public $tipoPersona="";

    public function __construct(){
        $params = func_get_args();
        $num_params = func_num_args();
        $funcion_constructor ='__construct'.$num_params;
        if (method_exists($this,$funcion_constructor)) {
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }
    public  function __construct0(){
     }
     public  function __construct5($nombre,$apellido,$cedula,$celular,$tipoPersona){
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCedula($cedula);
        $this->setCelular($celular);
        $this->setTipoPersona($tipoPersona);
     }
    public  function __construct6($id,$nombre,$apellido,$cedula,$celular,$tipoPersona){
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCedula($cedula);
        $this->setCelular($celular);
        $this->setTipoPersona($tipoPersona);
     }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     *
     * @return self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     *
     * @return self
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * @param mixed $cedula
     *
     * @return self
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * @param mixed $celular
     *
     * @return self
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * @param mixed $clave
     *
     * @return self
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipoPersona()
    {
        return $this->tipoPersona;
    }

    /**
     * @param mixed $tipoPersona
     *
     * @return self
     */
    public function setTipoPersona($tipoPersona)
    {
        $this->tipoPersona = $tipoPersona;

        return $this;
    }
}
 ?>