<?php
echo <<< HERE

<header>

	

	<div id="search">
		<img src="./images/keepin.png"/>
		<form action ="inicio.php" method = "post">
			<fieldset>
				<label> Usuario</label>
				<input type = "text" name = "userName" />

				<label> Contrase&ntildea</label>
				<input type = "text" name = "password" />

				<button type = "submit"> Iniciar Sesion </button>
			</fieldset>
		</form>

		<form action ="registro.php" method = "post">
			<button type = "submit"> Registrarse </button>
		</form>
	</div>
	
</header>


HERE;
?>
