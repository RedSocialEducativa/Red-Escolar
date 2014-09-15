<?php

	Class Perfil{
		//Se declaran las variables a utilizar
		private $id;
		private $nombre;
		private $apellido;
		private $ciudad;
		private $colegio;
		private $profesion;
		private $correo;
		private $contrasena;
		private $imagen_id;
		private $amigo_id;
		
		//Constructor
		function __construct($id, $nombre, $apellido,$ciudad,$colegio, $profesion, $correo, $contrasena,$imagen_id,$amigo_id) {
	 	   $this->id     = $id;
	       $this->nombre  = $nombre;
	       $this->apellido     = $apellido;
	       $this->ciudad     = $ciudad;
	       $this->colegio = $colegio;
	       $this->profesion     = $profesion;
	       $this->correo  = $correo;
	       $this->contrasena     = $contrasena;
	       $this->imagen_id     = $imagen_id;
	        $this->amigo_id     = $amigo_id;
	    
     	}

     	//Funciones
     	//GET
		function getId(){
		return $this->id;
		}

		function getNombre(){
		return $this->nombre;
		}

		function getApellido(){
		return $this->apellido;
		}

		
		function getCiudad(){
		return $this->ciudad;
		}

		function getColegio(){
		return $this->colegio;
		}

		function getProfesion(){
		return $this->profesion;
		}

		function getCorreo(){
		return $this->correo;
		}

		function getContrasena(){
		return $this->contrasena;
		}
		function getImagen_Id(){
		return $this->imagen_id;
		}
		function getAmigo_Id(){
		return $this->amigo_id;
		}
		
		//SET
		function setId($id){
			$this->id = $id;
		}

		function setNombre($nombre){
			$this->nombre = $nombre;
		}

		function setApellido($apellido){
			$this->apellido = $apellido;
		}

		
		function setCiudad($ciudad){
			$this->ciudad = $ciudad;
		}

		function setColegio($colegio){
			$this->colegio = $colegio;
		}

		function setProfesion($profesion){
			$this->profesion = $profesion;
		}

		function setCorreo($correo){
			$this->correo = $correo;
		}

		function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}

		function setImagen_Id($imagen_id){
			$this->imagen_id = $imagen_id;
		}
		function setAmigo_Id($amigo_id){
			$this->amigo_id = $amigo_id;
		}

	}

?>
