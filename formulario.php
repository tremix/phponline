<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="recibir-datos-html.php" method="post">
		<fieldset>
			<legend>Opciones Especiales</legend>
				<fieldset>
					<legend>Datos Personales</legend>
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" value="">

					<label for="nombre">Apellidos:</label>
					<input type="text" id="Apellidos" name="Apellidos" value="">

					<label for="nombre">Passwords:</label>
					<input type="hidden" id="pass" name="pass" value="123456">
				</fieldset>
		<input type="submit" value="Enviar">		
		<input type="reset" value="Restaurar">		
		</fieldset>

	</form>
</body>
</html>

<?php

?>