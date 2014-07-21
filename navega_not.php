<?php
echo <<<HERE
<nav>
	<ul class="menu">
		<li><a href="index.html">Inicio</a></li>
		<li><a href="mensajes.html">Mensajes</a></li>
		<li><a href="actividades.html">Actividades</a></li>
		<li><a href="perfil.html">Perfil</a></li>
			<li><a href="keepin.html">Salir</a></li>
	</ul>
	<div class="minimenu"><div>Menu</div>
		<select onchange="location=this.value">
			<option></option>
			<option value="index.html">Inicio</option>
			<option value="mensajes.html">Mensajes</option>
			<option value="actividades.html">Actividades</option>
			<option value="perfil.html">Perfil</option>
				<option value="keepin.html">Salir</option>
		
		</select>
	</div>
</nav>
HERE;
?>