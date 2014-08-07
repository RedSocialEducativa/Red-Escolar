<<<<<<< HEAD
<?php
	include('conectar.php');

class ciudadCollector{

	public $idciudad;
	public $nombre:
		 
	function insertar_ciudad($campos){
		if($this->con->conectar()==true){
			return mysql_query("INSERT INTO cciudad (nombres, descripcion) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')");
		}
	}
	
	function actualizar_ciudad($campos,$id){
		if($this->con->conectar()==true){
			return mysql_query("UPDATE grupo SET nombres = '".$campos[0]."', ciudad = '".$campos[1]."', sexo = '".$campos[2]."', telefono = '".$campos[3]."', fecha_nacimiento = '".$campos[4]."' WHERE id = ".$id);
		}
	}
	
	function mostrar_ciudad($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM grupo WHERE id=".$id);
		}
	}

	function mostrar_ciudad(){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM grupo ORDER BY id DESC");
		}
	}

	function eliminar_ciudad($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM grupo WHERE id=".$id);
		}
	
}
?>
