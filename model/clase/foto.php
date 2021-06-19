<?php 

/**
 * summary
 */
class Foto
{
    public $idFoto=0;
    public $url="";
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
    public  function __construct2($idFoto,$url){
        $this->setIdFoto($idFoto);
        $this->setUrl($url);
     }


    /**
     * @return mixed
     */
    public function getIdFoto()
    {
        return $this->idFoto;
    }

    /**
     * @param mixed $idFoto
     *
     * @return self
     */
    public function setIdFoto($idFoto)
    {
        $this->idFoto = $idFoto;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
 ?>