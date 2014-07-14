<?php
echo <<< HERE
<nav>
	<ul class="menu">
		<li><a href="index.php">Inicio</a></li>
		<li><a href="mensajes.php">Mensajes</a></li>
		<li><a href="actividades.php">Actividades</a></li>
		<li><a href="perfil.php">Perfil</a></li>
<li><a href="keepin.php">Salir</a></li>
	</ul>
	<div class="minimenu"><div>Menu</div>
		<select onchange="location=this.value">
			<option></option>
			<option value="index.php">Inicio</option>
			<option value="mensajes.php">Mensajes</option>
			<option value="actividades.php">Actividades</option>
			<option value="perfil.php">Perfil</option>
		<option value="keepin.php">Salir</option>
		</select>
	</div>
</nav>

HERE;
?>
