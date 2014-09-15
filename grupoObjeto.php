<?php

	Class Grupo{
		private $id;
		private $nombre;
		private $eventos;
		private $recursos;
		private $idAdministradorFK;
		
		function __construct($id, $nombre, $eventos,$recursos,$idAdministradorFK) {
	 	   $this->id     = $id;
	       $this->nombre  = $nombre;
	       $this->eventos    = $eventos;
	       $this->recursos     = $recursos;
	       $this->idAdministradorFK = $idAdministradorFK; 
     	}
		
		function getId(){
		return $this->id;
		}

		function getNombre(){
		return $this->nombre;
		}

		function getEventos(){
		return $this->eventos;
		}

		
		function getRecursos(){
		return $this->recursos;
		}

		function getIdAdministradorFK(){
		return $this->idAdministradorFK;
		}

		
		function setId($id){
			$this->id = $id;
		}

		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function setEventos($eventos){
			$this->eventos = $eventos;
		}

		
		function setRecursos($recursos){
			$this->recursos = $recursos;
		}

		function setIdAdministradorFK($idAdministradorFK){
			$this->idAdministradorFK = $idAdministradorFK;
		}

		
	}

?>
