<?php

	Class Persona{
		private $id;
		private $primerNombre;
		private $segundoNombre;
		private $primerApellido;
		private $segundoApellido;
		private $fechaNacimiento;
		private $profesion;
		private $ciudad;
		private $genero;

		function __construct($id, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido,
								$fechaNacimiento, $profesion, $ciudad, $genero) {
	       $this->id = $id;
	       $this->primerNombre = $primerNombre;
	       $this->segundoNombre = $segundoNombre;
	       $this->primerApellido = $primerApellido;
	       $this->segundoApellido = $segundoApellido;
	       $this->fechaNacimiento = $fechaNacimiento;
	       $this->profesion = $profesion;
	       $this->ciudad = $ciudad;
	       $this->genero = $genero;
     	}
     	
		function getId(){
		return $this->id;
		}

		function getPrimerNombre(){
		return $this->PrimerNombre;
		}

		function getSegundoNombre(){
		return $this->SegundoNombre;
		}

		function getPrimerApellido(){
		return $this->primerApellido;
		}

		function getSegundoApellido(){
		return $this->segundoApellido;
		}


		function getFechaNacimiento(){
		return $this->fechaNacimiento;
		}

		function getProfesion(){
		return $this->profesion;
		}

		function getCiudad(){
		return $this->ciudad;
		}

		function getGenero(){
		return $this->genero;
		}

//		Set
		function setId($id){
			$this->id = $id;
		}

		function setPrimerNombre($primerNombre){
			$this->primerNombre = $primerNombre;
		}

		function setSegundoNombre($segundoNombre){
			$this->segundoNombre = $segundoNombre;
		}

		function setPrimerApellido($primerApellido){
			$this->primerApellido = $primerApellido;
		}

		function setSegundoApellido($segundoApellido){
			$this->segundoApellido = $segundoApellido;
		}

		function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento = $fechaNacimiento;
		}

		function setProfesion($profesion){
			$this->profesion = $profesion;
		}

		function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}

		function setGenero($genero){
			$this->genero = $genero;
		}


	}// Cierre de Clase

?>
