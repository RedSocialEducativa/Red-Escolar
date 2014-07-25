<<<<<<< HEAD
<html>
<?php include('metadatonot.php');?>
<body>
	<div class="clear"></div>
		<?php include('header_not.php');?>
	<div class="clear"></div>
		<?php include('navega_not.php');?>
	<div class="clear"></div>
		<?php include('section_not.php');?>			
	<div class="clear"></div>
	<?php include('footer_not.php');?>	
	</div>
</body>
</html>
=======
<?php
	
	include('conectar.php');	

	class notificaciones{
		private $id;
		private $descripcion;
		
		
		function __construct($id, $descripcion){
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
			$this->id=$id;
		}

		function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function constructor($id, $descripcion){
			$this->id=$id;
			 $this->descripcion=$descripcion;
		}

		public function obtenerNombre(){
			return $this->nombre;
 		}

 		public function obtenerId(){
 			return $this->id;
 		}

	}



?>
>>>>>>> origin/master
