<?php 

require_once("clase/cliente.php");
/**
 * summary
 */
class loginModel extends Model
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function valida($email,$pass){
    	try {
    	$sql="SELECT `id`,`nombre`,`apellido`,`cedula`,`celular`,`tipoPersona` FROM `persona` WHERE `email`=:email AND `clave`=:clave";
    	$statement=$this->conexion->prepare($sql);
        $statement->bindParam(":email",$email,PDO::PARAM_STR);
        $statement->bindParam(":clave",$pass,PDO::PARAM_STR);
    	if ($statement->execute()) {
    		$row = $statement->fetch(PDO::FETCH_ASSOC);
            if ($row["nombre"]!="") {
                if ($row["tipoPersona"]=="Cliente") {
                    $persona = new Cliente($row["id"],$row["nombre"],$row["apellido"],$row["cedula"],$row["celular"],$row["tipoPersona"]);    
                    $sql2="SELECT `direccion` FROM `cliente` WHERE `idCliente`=:cliente";
                    $statement2=$this->conexion->prepare($sql2);
                    $statement2->bindParam(":cliente",$row['id'],PDO::PARAM_STR);
                    if ($statement2->execute()) {
                        $row2 = $statement2->fetch(PDO::FETCH_ASSOC);
                        $persona->setDireccion($row2["direccion"]);
                    }
                }else if($row["tipoPersona"]=="Sup"){
                    $persona = new Sup($row["id"],$row["nombre"],$row["apellido"],$row["cedula"],$row["celular"],$row["tipoPersona"]);    

                }
                session_start();
                $_SESSION['usuario']=json_encode($persona);
                return json_encode(array("estado" => 1,"usuario"=>$persona));
            }else{
                return json_encode(array("estado" => 0));    
            }
    	} else{
            return json_encode(array("estado" => 0));
        }
    	} catch (Exception $e) {
    		return json_encode(array("estado" => -1));
    	}
    }
}
 ?>