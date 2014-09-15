<header>

	<div id="search">
		<img src="./images/keepin.png"/>

		 <!-- <form class="form-signin" role="form"> -->
			<form action ="script_acceso_usuario.php" method = "post" id="form">
		        <h2 class="form-signin-heading">Inicio de Sesion</h2>
		        <input type="email" class="form-control" placeholder="Email address" id="correo" name="correo" required autofocus>
		        <input type="password" class="form-control" placeholder="Password" id="contraseña" name="contrasena" required><br><br>
		        
		        <button class="btn btn-lg btn-primary " type="submit">Ingresar</button>
		    </form>
	    <!--  </form> -->

		    <form action ="registro.php" method = "post">
		    	<label>
					 <h3 class="form-signin-heading">Necesita una Cuenta</h3>
			    </label>
			    <button class="btn btn-lg btn-primary type="submit">Registrarse</button></a>
				
			</form>
	</div>
	
</header>