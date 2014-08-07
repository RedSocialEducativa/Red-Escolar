<?php
	include('conectar.php');	

 class ciudad{

     public  $id;
 	  public  $nombre;

	  function getId(){
	 			return $this->id;
	 	}
	 
	  function getNombre(){
	 			return $this->nombre;
	 	}
	 
	  function setId($id){
	 			$this->id = $id;
	 	}
	 
	 	function setNombre($nombre){
	 			$this->nombre = $nombre;
	 	}
	 	

	 	public function constructor($id,$nombre){
			$this->id=$id;
	         $this->nombre=$nombre;
	 	}
	 
	 	public function obtenerNombre(){
	 		return $this->nombre;
	 	}
	 
	 	public function obtenerId(){
	 		return $this->id;
	 	}
    }
?>