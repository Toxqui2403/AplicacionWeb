<?php
class Conexion {
	private $dbhost;
	private $usuario;
	private $password;
	private $dbname;
	private $conn;
	//************************************************************************
	public function __construct($servidor,$usuario,$password,$dbname){
		$this->dbhost = $servidor;
		$this->usuario= $usuario;
		$this->password= $password;
		$this->dbname = $dbname;
	}
	//************************************************************************
	public function obtenerConn(){
		$this->conn = mysqli_connect($this->dbhost,$this->usuario,$this->password,$this->dbname);
		// verificar conexion
		if (!$this->conn) {
    		die("Error al conectar la base de datos: " . mysqli_connect_error());
		}
			echo "La conexion a la base con exito";
	}
	
	//****************************************************************
	public function ejecutarQuery($sql){
		echo $sql;
		return mysqli_query($this->conn,$sql);
	}

	public function cerrar(){
		mysqli_close($this->conn);
	} 
}
?>