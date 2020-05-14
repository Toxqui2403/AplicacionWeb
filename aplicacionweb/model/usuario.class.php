<?php
class Usuario {
	private $id;
	private $nombre;
	private $email;
	private $username;
	private $password;
	private $estatus;
	private $fechaRegistro;

	public function __construct(){
		$this->id = 0;
		$this->nombre;
		$this->email;
		$this->username;
		$this->password;
		$this->estatus = 1;
		$this->fechaRegistro;
	}
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getUsername(){
		return $this->username;
	}
	public function setUsername($username){
		$this->username = $username;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setPassword($password){
		$this->password = $password;
	}
	public function getEstatus(){
		return $this->estatus;
	}
	public function setEstatus($estatus){
		$this->estatus = $estatus;
	}
	public function getFechaRegistro(){
		return $this->fechaRegistro;
	}
	public function setFechaRegistro($fechaRegistro){
		$this->fechaRegistro = $fechaRegistro;
	}

	//todos los metodos get/set

	//metodo toString()
	public function toString(){
		return "<br>Id = ".$this->getId()."<br>Nombre = ".$this->getNombre()."<br>Email = ".$this->getEmail()."<br>Username = ".$this->getUsername()."<br>Password = ".$this->getPassword()."<br>Estatus = ".$this->getEstatus()."<br>Fecha de Registro = ".$this->getFechaRegistro();
	}
}
?>