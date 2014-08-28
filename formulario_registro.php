
<?php
 
//variables valores por defecto
$name = "";
 
	/*Validamos que el nombre no tenga caracteres extraños 
	y que su longitud sea mayor que 4*/
	function validateName($name){
		//NO cumple longitud minima
		if(strlen($name) < 4)
			return false;
		//Si longitud OK pero NOOK solo caracteres de la A a la z
		else if(!preg_match("/^[a-zA-Z]+$/", $name))
			return false;
		// SI longitud, SI caracteres A-z
		else
			return true;
	}
 
//Si se ha enviado la variable mediante POST, validamos los campos
if(isset($_POST['send'])){
	if(!validateName($_POST['name']))
		$name = "error";
 
	//Validamos si hay error
	if($name != "error")
		$status = 1;
}
 
?>

<header>

	<div id="search">
		<img src="./images/keepin.png"/>
		<form id="form1" action ="formulario.php" method = "post">
			<fieldset>
				<label for="correo"> Correo Electronico</label>
				<input type="text" class="text" name = "correo" autofocus required/>

				<label for="constraseña"> Contrase&ntildea</label>
				<input type="password" class="text" name = "password" autofocus required/>

				<label for="nombre> Nombre </label>
				<input type="text" class="text" name = "nombre" autofocus required/>
				<label for="apellido">Apellido </label>
				<input type="text" class= "text" name = "apellido" autofocus required/>
				<label for="ciudad"> ciudad</label>
				<input type="text" class="text" name = "ciudad" autofocus required/>
				<label for="colegio"> colegio</label>
				<input type = "text" class="text" name = "colegio" autofocus required/>
				<label for="profesion"> profesion</label>
				<input type = "text" class="text" name = "profesion" autofocus required/>
			
				<div><input class="submit" name="send" type="submit" value=" Guardar" ></div>
			</fieldset>
		</form>

		<form action ="index.php" method = "post">
			<input type="submit" value="Cancelar" />
		</form>
	</div>
 	
</header>

}
?>