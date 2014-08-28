<?php

	Class Perfil{
		private $id;
		private $nombres;
		private $apellidos;
		private $foto;
		private $ciudad;
		private $colegio;
		private $profesion;
		private $interes1;
		private $interes2;
		private $interes3;
		private $correo;
		private $contraseña;


		function __construct($id, $nombres, $apellidos, $foto, $ciudad,
								$colegio, $profesion, $interes1, $interes2, $interes3,
								$correo, $contraseña) {
	       $this->id           = $id;
	       $this->nombres      = $nombres;
	       $this->apellidos    = $apellidos;
	       $this->foto         = $foto;
	       $this->ciudad       = $ciudad;
	       $this->colegio      = $colegio;
	       $this->profesion    = $profesion;
	       $this->interes1     = $interes1;
	       $this->interes2     = $interes2;
	       $this->interes3     = $interes3;
	       $this->correo       = $correo;
	       $this->contraseña   =$contraseña;
     	}
     	
		function getId(){
		return $this->id;
		}

		function getNombres(){
		return $this->nombres;
		}

		function getApellidos(){
		return $this->apellidos;
		}

		function getFoto(){
		return $this->foto;
		}

		function getCiudad(){
		return $this->ciudad;
		}


		function getColegio(){
		return $this->colegio;
		}

		function getProfesion(){
		return $this->profesion;
		}

		function getInteres1(){
		return $this->interes1;
		}

		function getInteres2(){
		return $this->interes2;
		}

		function getInteres3(){
		return $this->interes3;
		}

		function getCorreo(){
		return $this->correo;
		}

		function getContraseña(){
		return $this->contraseña;
		}


//		Set
		function setId($id){
			$this->id = $id;
		}

		function setNombres($nombres){
			$this->nombres = $nombres;
		}

		function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}

		function setFoto($foto){
			$this->foto = $foto;
		}

		function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}

		function setColegio($colegio){
			$this->colegio = $colegio;
		}

		function setProfesion($profesion){
			$this->profesion = $profesion;
		}

		function setInteres($interes1){
			$this->interes1 = $interes1;
		}

		
		function setCorreo(){
			$this->correo = $correo;
		}

		function setContraseña(){
			$this->contraseña = $contraseña;
		}


	}// Cierre de Clase

?>
