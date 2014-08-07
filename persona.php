<?php

	Class Persona{
		private $id;
		private $primerNombre;
		private $segundNdombre;
		private $primerApellido;
		private $segundoApellido;
		private $fechaNacimiento;
		private $profesion;
		private $ciudad;
		private $genero;

// 		Get
		function getId(){
		return $this->id;
		}

		function getPrimerNombre(){
		return $this->PrimerNombre;
		}

		function getSegundNdombre(){
		return $this->SegundNdombre;
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

		function setSegundNdombre($segundNdombre){
			$this->segundNdombre = $segundNdombre;
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
