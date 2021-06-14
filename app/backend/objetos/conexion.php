<?php

class conexion{
	private $tipo_de_base = 'mysql';
	private $host = 'localhost';
   	private $nombre_de_base = '';
  	private $usuario = '';
  	private $contrasena ='';
	private static $conexion;


	private function __construct(){
		      try {
         self::$conexion = new PDO("{$this->tipo_de_base}:host={$this->host};dbname={$this->nombre_de_base}", $this->usuario, $this->contrasena,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

      } catch (PDOException $e) {
         echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle:' . $e->getMessage();
         exit;
      }
	}

	public static function getConexion(){
	if(!self::$conexion){
		new self();
		}
	return self::$conexion;
	}

	public static function close(){
		self::$conexion=null;
	}
}

?>