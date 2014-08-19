<?php

	Class Mensaje{
		private $id;
		private $texto;
		private $status;
		
		function __construct($id, $texto, $status) {
	 	   $this->id     = $id;
	       $this->texto  = $texto;
     	   $this->status = $status;
     	}

		function getId(){
		return $this->id;
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

		function setTexto($texto){
			$this->texto = $texto;
		}

		function setStatus($status){
			$this->status = $status;
		}
	}

?>
