<?php include('templates/head.php')?>
<link rel="stylesheet" href="http://localhost/scriptweb/public/css/registro.css">
<div class="registrofondo">
	<h2 class="titulor">Formulario de Registro</h2>

	<form name="registro" class="formregistro" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

		<p align="center">
			<select name="tipo_user" id="tipo_user" class="tipouser">
				<option value="1">Aprendiz</option>
				<option value="2">Instructor</option>
				<option value="seleccionar" selected>Seleccionar Usuario</option>
			</select>
		</p>
		<p align="center">
			<select class="conocimiento" name="areaconocimiento" id="areaconocimiento" style="display:none;">
				<option value="1">Area mercadeo</option>
				<option value="2">Area industrias creativas</option>
				<option value="3">Area teleinformaciones</option>
				<option value="4">Area logistica</option>
				<option value="seleccionar" selected>Seleccionar Area De Conocimiento</option>
			</select>
		</p>
		<p align="center">
			<select class="selectipo" name="areformacion" id="areaformacion" style="display:none;" class="selectipo">
				<option value="1">Tecnólogo en gestión mercados</option>
				<option value="2">Tecnólogo en negociación internacional</option>
				<option value="3">Tecnólogo en dirección de ventas</option>
				<option value="4">Tecnólogo en comunicación comercial</option>
				<option value="5">Técnico en ventas de productos y servicios</option>
				<option value="6">Técnico en comercialización de productos masivos</option>
				<option value="7">Técnico en operaciones comerciales</option>
				<option value="8">Especialización tecnologica en diseño y desarrollo de investigación de mercadeo</option>
				<option value="9">Especialización tecnologica en marketing y modelo de negocio online</option>
				<option value="10">Tecnólogo en animación 3D</option>
				<option value="11">Tecnólogo en escritura para productos audiovisuales</option>
				<option value="12">Tecnólogo en producción de medios audiovisuales digitales</option>
				<option value="13">Tecnólogo producción de multimedia</option>
				<option value="14">Técnico en diseño e integración de multimedia</option>
				<option value="15">Técnico en operación de camaras y luces de televisión</option>
				<option value="16">Tecnólogo en gestión de redes de datos</option>
				<option value="17">Tecnólogo en mantenimiento de equipos de computo, diseño e instalaciòn de cableado estructurado</option>
				<option value="18">Tecnólogo en desarrollo de videojuegos</option>
				<option value="19">Tecnólogo en analisis y desarrollo de sistemas de información</option>
				<option value="20">Técnico en mantenimiento de equipos de computos</option>
				<option value="21">Especialización tecnóloga en desarrollo de aplicaciones para dispositivos moviles</option>
				<option value="22">Especialización tecnólogica en gestión y seguridad de bases de datos</option>
				<option value="23">Tecnólogo en gestión logistica</option>
				<option value="24">Tecnólogo en logistica del transporte</option>
				<option value="25">Técnico en desarrollo de operaciones logisticas de abastecimiento</option>
				<option value="26">Técnico en comercio internacional</option>
				<option value="27">Auxiliar en apoyo logístico a eventos y servicios empresariales</option>
				<option value="28">Auxiliar en almacenamiento, empaque y embalaje de objetos</option>
				<option value="seleccionar" selected>Seleccionar Area De Formación</option>
			</select>
		</p>
		<p>
			<select name="Sexo" class="Sex">
				<option value="femenino">Femenino</option>
				<option value="masculino">Masculino</option>
				<option value="seleccionar" selected>Seleccionar Genero</option>
			</select>
		</p>

		<p align="center">
			<input class="formreg" type="text" name="nombre" placeholder="Nombre completo" required>
		</p>
			<div class="divfecha">
				<p class="text_fecha">Fecha de nacimiento</p>
					<select name="Dia" class="fecha" required>
				      	<option value="Dia" selected>Dìa</option>
				            <script>
				                    var i;
				                        for (i=31; i>=01; i--){
				                           	document.write("<option>" + i + "</option>");}
				            </script>
					</select>
				<select name="Mes" class="fecha" required>
		      	<option value="Mes" selected>Mes</option>
		            <script>
		                   	var i;
		                        var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
		                              for (i = 0; i<12; i++){
		                                    document.write("<option>" + meses[i] + "</option>");}
		            </script>
				</select>

				<select name="anio" class="fecha">
				<option value="anio" selected>Año</option>
					<script>
							var i;
					for (i = 2000; i>=1980; i--){
						document.write("<option>" + i + "</option>");
					}

					</script>
				</select>
			</div>
		<p>
			<select name="pais" id="pais" class="pais">
				<option value="1">Colombia</option>
				<option value="2">Brasil</option>
				<option value="seleccionar" selected>Seleccionar Pais</option>
			</select>
		</p>
		<p>
			<select name="departamento" id="departamento" class="pais">
				<option value="1">Arauca</option>
				<option value="2">Cundinamarca</option>
				<option value="seleccionar" selected>Seleccionar Departamento</option>
			</select>
		</p>
		<p>
			<select name="ciudad" id="ciudad" class="pais">
				<option value="ciudad1">Arauca</option>
				<option value="ciudad2">Bogotá</option>
				<option value="seleccionar" selected>Seleccionar Ciudad</option>
			</select>
		</p>
		<p>
			<select name="zona" id="zona" class="pais">
				<option value="rural">Rural</option>
				<option value="urbana">Urbana</option>
				<option value="seleccionar" selected>Seleccionar Zona</option>
			</select>
		</p>
		<p>
			<select name="corregimiento" class="pais" id="corregimiento" style="display:none;">
				<option value="corregimiento1">Arauca</option>
				<option value="corregimiento2">Suma paz</option>
				<option value="seleccionar" selected>Seleccionar Corregimiento</option>
			</select>
		</p>
		<p>
			<select name="comuna" class="pais" style="display:none;">
				<option value="comuna1">Usaquén</option>
				<option value="comuna2">Engativa</option>
				<option value="seleccionar" selected>Seleccionar Comuna</option>
			</select>
		</p>
		<p>
			<select name="barrio" class="pais" style="display:none;">
				<option value="barrio1">Canaima</option>
				<option value="barrio2">Acapulco</option>
				<option value="seleccionar" selected>Seleccionar Barrio</option>
			</select>
		</p>
		<p align="center">
			<select name="tipo_documento" class="tipodoc">
				<option value="1">C.C</option>
				<option value="2">T.I</option>
				<option value="seleccionar" selected>Tipo De Documento</option>
		<p align="center">
			<input class="numerodoc" type="text" name="identidad" placeholder="Número" required>
		</p>
			</select>
		<p align="center">
			<input class="formreg" type="text" name="telefono" placeholder="Telefono" required>
			<input class="formreg" type="email" name="correo" placeholder="Correo electronico" required>
			<input class="formreg" type="password" name="password" placeholder="Contraseña" required>
			<input class="formreg" type="password" name="conf_pass" placeholder="Confirmar contraseña" required>

			<div class="botones">
			<input class="botonreg" type="submit" name="btn-register" value="Aceptar">
			<input class="botonreg" type="reset" value="Limpiar datos">
			</div>
		</p>
	</form>
</div>
<script src="http://localhost/scriptweb/public/js/jquery-3.3.1.min.js">

</script>
<script src="http://localhost/scriptweb/public/js/registro.js"></script>
<?php include('templates/foot.php')?>
