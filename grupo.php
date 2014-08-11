<?php

	Class Grupo{
		private $id;
		private $nombre;
		private $descripcion;
		
		function __construct($id, $nombre, $descripcion) {
	       $this->id = $id;
	       $this->nombre = $nombre;
	       $this->descripcion = $descripcion;
     	}

		function getId(){
		return $this->id;
		}

		function getNombre(){
		return $this->nombre;
		}

		function getDescripcion(){
		return $this->descripcion;
		}

		function setId($id){
			$this->id = $id;
		}

		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

	}

?>
