<?php
echo <<< HERE

<header>

	<div id="logo"><a href="#"><img src="./images/keepin.png"/></a></div>

	<div id="search">
		<form action ="index.php" method = "post">
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

		<form action ="keepin.php" method = "post">
			<button type = "submit"> Tengo una cuenta, Iniciar Sesion </button>
		</form>
	</div>
 	
</header>


HERE;
?>
