<?php

	Class Archivo{
		private $id;
		private $descripcion;
		
		function __construct($id, $descripcion) {
	       $this->id = $id;
	       $this->descripcion = $descripcion;
     	}
		
		function getId(){
		return $this->id;
		}

		function getDescripcion(){
		return $this->descripcion;
		}

		function setId($id){
			$this->id = $id;
		}

		function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

	}

?>
