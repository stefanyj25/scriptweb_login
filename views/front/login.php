<?php include ('templates/head.php')?>
<link rel="stylesheet" href="http://localhost/scriptweb/public/css/login.css">

	<div class="loginfondo">
		<h2 class="titulolog">Login</h2>
			<form name="login" class="login" action="http://localhost/scriptweb/views/front/validarCode.php" method="post">
			<p align="center">
				<input type="email" name="correo_users"  class="forminput" placeholder="Correo"autofocus required></input>
				<input type="password" name="pass_users" class="forminput" placeholder="Contraseña" required></input>
			</p>
			<p class="p_recordar">
				<input type="checkbox" name="recordar" class="recordar">Recordar contraseña</input>
			</p>
				<div class="botoneslog">
				<input type="submit" value="Ingresar" name="btn-login" class="botonlog">
				<input type="reset" value="Cancelar" name="cancelar" class="botonlog">
				</div>
			</form>
	</div>

<?php include ('templates/foot.php')?>
