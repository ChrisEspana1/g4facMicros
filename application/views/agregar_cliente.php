<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de formulario en CodeIgniter</title>
</head>
<body>
	<h1>Ejemplo de formulario en CodeIgniter</h1>
	<p>Por favor, complete el siguiente formulario:</p>
	<?php echo form_open('Clientes/save_cliente'); ?>
	<label for="primernombre">Primer nombre:</label>
	<input type="text" name="primernombre" id="primernombre"><br><br>
	<label for="segundonombre">Segundo nombre:</label>
	<input type="text" name="segundonombre" id="segundonombre"><br><br>
	<label for="otronombre">Otro nombre:</label>
	<input type="text" name="otronombre" id="otronombre"><br><br>
	<label for="primerapellido">Primer apellido:</label>
	<input type="text" name="primerapellido" id="primerapellido"><br><br>
	<label for="segundoapellido">Segundo apellido:</label>
	<input type="text" name="segundoapellido" id="segundoapellido"><br><br>
	<label for="otroapellido">Otro apellido:</label>
	<input type="text" name="otroapellido" id="otroapellido"><br><br>
	<label for="genero">Género:</label>
	<select name="genero" id="genero">
		<option value="M">Masculino</option>
		<option value="F">Femenino</option>
	</select><br><br>
	<label for="fechanacimiento">Fecha de nacimiento:</label>
	<input type="date" name="fechanacimiento" id="fechanacimiento"><br><br>
	<label for="segmento">Segmento:</label>
	<input type="text" name="segmento" id="segmento"><br><br>
	<label for="sueldo">Sueldo:</label>
	<input type="number" name="sueldo" id="sueldo"><br><br>
	<label for="dpi">DPI:</label>
	<input type="text" name="dpi" id="dpi"><br><br>
	<label for="correo">Correo electrónico:</label>
	<input type="email" name="correo" id="correo"><br><br>
	<label for="telefono">Teléfono:</label>
	<input type="text" name="telefono" id="telefono"><br><br>
	<label for="direccion">Dirección:</label>
	<textarea name="direccion" id="direccion"></textarea><br><br>
	<?php echo form_submit('submit', 'Guardar'); ?>
	<?php echo form_close(); ?>
</body>
</html>
