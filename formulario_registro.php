<?php
echo <<< HERE

<header>

	<div id="search">
		<img src="./images/keepin.png"/>
		<form action ="inicio.php" method = "post">
			<fieldset>
				<label> Correo Electronico</label>
				<input type = "text" name = "correo" />

				<label> Contrase&ntildea</label>
				<input type = "text" name = "password" />

				<label> Usuario</label>
				<input type = "text" name = "userName" />

				<button type = "submit"> Crear mi Cuenta </button>
			</fieldset>
		</form>

		<form action ="index.php" method = "post">
			<button type = "submit"> Tengo una cuenta, Iniciar Sesion </button>
		</form>
	</div>
 	
</header>


HERE;
?>
