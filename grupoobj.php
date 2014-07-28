<<<<<<< HEAD
<?php
	include('conectar.php');

class grupoCollector{

	public $idgrupo;
	public $nombre:
	public $descripcion;
	 
	function insertar($campos){
		if($this->con->conectar()==true){
			return mysql_query("INSERT INTO grupo (nombres, descripcion) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')");
		}
	}
	
	function actualizar($campos,$id){
		if($this->con->conectar()==true){
			return mysql_query("UPDATE grupo SET nombres = '".$campos[0]."', ciudad = '".$campos[1]."', sexo = '".$campos[2]."', telefono = '".$campos[3]."', fecha_nacimiento = '".$campos[4]."' WHERE id = ".$id);
		}
	}
	
	function mostrar_cliente($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM grupo WHERE id=".$id);
		}
	}

	function mostrar_clientes(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM grupo ORDER BY id DESC");
		}
	}

	function eliminar($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM grupo WHERE id=".$id);
		}
	
}
?>

}


?>
=======
<html lang="en">
<?php include('metadatos.php');?>
 <body role="document">
	<div class="clear"></div>
		<?php include('header.php');?>
	<div class="clear"></div>
		<?php include('navegacion.php');?>
	<div class="clear"></div>
		<?php include('section_grupos.php');?>		
	</div>
</body>
</html>
>>>>>>> origin/master
