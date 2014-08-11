<?php

	Class Recordatorio{
		private $id;
		private $descripcion;
		private $fechaEvento;
		private $horaInicio;
		private $horaFinal;
		

		function __construct($id, $descripcion, $fechaEvento, $horaInicio, $horaFinal) {
	       $this->id = $id;
	       $this->descripcion = $descripcion;
	       $this->fechaEvento = $fechaEvento;
	       $this->horaInicio = $horaInicio;
	       $this->horaFinal = $horaFinal;
	       
     	}
     	
		function getId(){
		return $this->id;
		}

		function getDescripcion(){
		return $this->descripcion;
		}

		function getFechaEvento(){
		return $this->fechaEvento;
		}

		function getHoraInicio(){
		return $this->horaInicio;
		}

		function getHoraFinal(){
		return $this->horaFinal;
		}

//		Set
		function setId($id){
			$this->id = $id;
		}

		function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		function setFechaEvento($fechaEvento){
			$this->fechaEvento = $fechaEvento;
		}

		function setHoraInicio($horaInicio){
			$this->horaInicio = $horaInicio;
		}

		function setHoraFinal($horaFinal){
			$this->horaFinal = $horaFinal;
		}

	}// Cierre de Clase

?>
