<?php

	Class Mensaje{
		private $id;
		private $texto;
		private $nombrePerfilFK;
		
		function __construct($id, $texto, $nombrePerfilFK) {
	 	   $this->id     = $id;
	       $this->texto  = $texto;
     	   $this->nombrePerfilFK = $nombrePerfilFK;
     	  
     	}

		function getId(){
		return $this->id;
		}

		function getTexto(){
		return $this->texto;
		}

		function getnombrePerfilFK(){
		return $this->idPerfilFK;
		}
		
		

		function setId($id){
			$this->id = $id;
		}

		function setTexto($texto){
			$this->texto = $texto;
		}

		function setNombrePerfilFK($nombrePerfilFK){
			$this->nombrePerfilFK = $nombrePerfilFK;
		}
		
		
	}

?>
