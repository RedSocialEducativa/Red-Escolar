<?php

	Class Imagen{
		private $imagen_id;
		private $imagen;
		
		function __construct($imagen_id, $imagen) {
	 	   $this->imagen_id     = $imagen_id;
	       $this->imagen  = $imagen;
     	  
     	}

		function getImagen_Id(){
		return $this->imagen_id;
		}

		function getImagen(){
		return $this->imagen;
		}

		
		function setImagen_Id($imagen_id){
			$this->imagen_id = $imagen_id;
		}

		function setImagen($imagen){
			$this->imagen = $imagen;
		}

		
	}

?>