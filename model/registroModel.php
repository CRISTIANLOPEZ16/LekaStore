<?php 

require_once("clase/persona.php");
/**
 * summary
 */
class registroModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }
    public function registrarUsuario($data){
    	try {
    	$sql="INSERT INTO `persona`(`nombre`, `apellido`, `cedula`, `celular`, `email`, `clave`, `tipoPersona`) VALUES (:nombre,:apellido,:cedula,:celular,:email,:clave,'Cliente')";
    	$statement=$this->conexion->prepare($sql);
    	$statement->bindParam(":nombre",$data['nombre'],PDO::PARAM_STR);
        $statement->bindParam(":apellido",$data['apellido'],PDO::PARAM_STR);
        $statement->bindParam(":cedula",$data['cedula'],PDO::PARAM_INT);
        $statement->bindParam(":celular",$data['celular'],PDO::PARAM_INT);
        $statement->bindParam(":email",$data['email'],PDO::PARAM_STR);
        $statement->bindParam(":clave",$data['clave'],PDO::PARAM_STR);
        $statement->execute();
        $id=$this->conexion->lastInsertId();
        $sql2="INSERT INTO `cliente`(`idCliente`,`direccion`) VALUES (:cliente,:direccion)";
        $statement2=$this->conexion->prepare($sql2);
        $statement2->bindParam(":cliente",$id,PDO::PARAM_STR);
        $statement2->bindParam(":direccion",$data['direccion'],PDO::PARAM_STR);
    	$statement2->execute();
    	} catch (Exception $e) {
    		return -1;
    	}
    }

}

 ?>