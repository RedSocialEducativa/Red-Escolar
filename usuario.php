<?php

	Class Usuario{
		private $id;
		private $correoElectronico;
		private $password;
		
		function __construct($id, $correoElectronico, $password) {
	       $this->id = $id;
	       $this->correoElectronico = $correoElectronico;
	       $this->password = $password;
     	}

		function getId(){
		return $this->id;
		}

		function getCorreoElectronico(){
		return $this->correoElectronico;
		}

		function getPassword(){
		return $this->password;
		}

		function setId(){
			$this->id = $id;
		}
		
		function setcorreoElectronico(){
			$this->correoElectronico = $correoElectronico;
		}

		function setPassword(){
			$this->password = $password;
		}


	}

?>
