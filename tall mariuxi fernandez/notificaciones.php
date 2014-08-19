<?php

	Class Notificaciones{
		private $id;
		private $idPerfil;
		private $texto;
		private $status;
		
		function __construct($id, $idPerfil, $texto, $status) {
	       $this->id = $id;
	       $this->idPerfil = $idPerfil;
	       $this->texto = $texto;
	       $this->status = $status;
     	}

		function getId(){
		return $this->id;
		}

		function getIdPerfil(){
		return $this->idPerfil;
		}

		function getTexto(){
		return $this->texto;
		}

		function getStatus(){
		return $this->status;
		}

		function setId($id){
			$this->id = $id;
		}

		function setIdPerfil($idPerfil){
			$this->idPerfil = $idPerfil;
		}

		function setTexto($texto){
			$this->texto = $texto;
		}

		function setStatus($status){
			$this->status = $status;
		}


	}

?>
