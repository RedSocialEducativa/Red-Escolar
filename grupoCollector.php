<?php
include_once('grupoObjeto.php');
include_once('Collector.php');

class GrupoCollector extends Collector
{
	function showGrupo() {
		$rows = self::$db->getRows("SELECT * FROM grupo ");        
		$arrayGrupo= array();        
		foreach ($rows as $c){
		$aux = new grupo($c{'id'},$c{'nombre'},$c{'eventos'},$c{'recursos'}
      	,$c{'idAdministradorFK'});
		array_push($arrayGrupo, $aux);
		}
    return $arrayGrupo;        
	}

	function crearGrupo($nombre, $eventos, $recursos, $idAdministradorFK) { 
	$insertrow = self::$db->insertRow("INSERT INTO proyecto.grupo (id, nombre, eventos, recursos, idAdministradorFK) 
	VALUES (?, ?, ?, ?, ?)", array(null, "{$nombre}", "{$eventos}", "{$recursos}", "{$idAdministradorFK}"));        
	}

	function readGrupol() {
		$rows = self::$db->getRows("SELECT * FROM grupo ");        
		$arrayGrupo= array();        
		foreach ($rows as $c){
		$aux = new grupo($c{'id'},$c{'nombre'},$c{'eventos'},$c{'recursos'}
      	,$c{'idAdministradorFK'});
		array_push($arrayGrupo, $aux);
		}
    return $arrayGrupo;        
	}
  
  	function updateGrupo($id,$nombre,$eventos,$recursos,$idAdministradorFK) {    
		$insertrow = self::$db->updateRow("UPDATE proyecto.grupo SET grupo.nombre = ?,grupo.eventos = ? ,grupo.recursos = ?,grupo.idAdministradorFK = ? WHERE grupo.id = ? ", array( "{$nombre}","{$eventos}","{$recursos}","{$idAdministradorFK}",$id));
	}  

	function deleteGrupo($id) {    
		$deleterow = self::$db->deleteRow("DELETE FROM proyecto.grupo WHERE id= ?", array("{$id}"));
	}  
	
	 	 function mostrarDatos($id){
	 	 	

		    $conexion=mysql_connect('localhost','root','root');
		 mysql_select_db('proyecto',$conexion);
		  
		 $consulta_mysql="select nombre,eventos,recursos
		                     from grupo
		                         where id like'$id'";
		 $resultado_consulta_mysql=mysql_query($consulta_mysql,$conexion);
		  
		 while($fila=mysql_fetch_array($resultado_consulta_mysql)){
		 					
		  echo "Grupo:"."<br>".$fila['nombre']."<br>"."<br>"."Eventos:"."<br>".$fila['eventos']."<br>"."Recursos:"."<br>".$fila['recursos'];
		 }
		  }  
	  	
  	}
?>