	<MARQUEE><span style="color: #507ADC;"><big><h1>Bienvenidos a la Facultad de Ingenería Mecánica de la Universidad tecnologica de Pereira </h1></span></MARQUEE>
	<?php  echo validation_errors("<div class='alert alert-danger'><p>","</p></div>");?>
	<?php  echo form_open("/registro/ingresardatos")?>
<?php
	$Nombres= array(
		'name'=> 'Nombres',
		'placeholder'=> 'ingresa tu nombre'
	 );
	$Apellidos= array(
		'name'=> 'Apellidos',
		'placeholder'=> 'ingresa tus Apellidos'
	 );
	$Direccion= array(
		'name'=> 'Direccion',
		'placeholder'=> 'ingresa tu Direccion'
	 );
	$Telefon= array(
		'name'=> 'Telefon',
		'placeholder'=> 'ingresa tu numero de Telefono'
	 );
	$Sexo= array(
		'name'=> 'Sexo',
		'placeholder'=> 'Elige Tu Sexo'
	 );
	$correoeletronico= array(
		'name'=> 'correoeletronico',
		'placeholder'=> 'ingresa correo eletronico'
	 );
	$rol= array(
		'name'=> 'rol',
		'placeholder'=> 'Elige Tu rol'
	 );


	$pass= array(
		'name'=> 'password',
		'placeholder'=> 'Escribe la contraseña:'
	 );

	$vpass= array(
		'name'=> 'vpassword',
		'placeholder'=> 'Verifica la contraseña'
	 );

	$fnacimiento= array(
		'name'=> 'fnacimiento',
		'id' => 'fnacimiento',
		'placeholder'=> 'Fecha de nacimiento'
	 );

?>
<?php  echo form_label('Nombre:','Nombres')?>
<?php  echo form_input($Nombres)?>
<?php  echo form_label('Apellidos:','Apellidos')?>
<?php  echo form_input($Apellidos)?>
<br>
<?php  echo form_label('Direccion:','Direccion')?>
<?php  echo form_input($Direccion)?>
<br>
<?php  echo form_label('Telefonos:','Telefon')?>
<?php  echo form_input($Telefon)?>
<?php  echo form_label('Sexo:','Sexo')?>
<?php  echo form_input($Sexo)?>
<br>
<?php  echo form_label('Correo Eletronico:','correoeletronico')?>
<?php  echo form_input($correoeletronico)?>
<?php  echo form_label('rol:','rol')?>
<select name="rol">
	<option value="admin">Administrativo</option>
	<option value="docente">Docente</option>
	<option value="estudiantea">Estudiante Antiguo</option>
	<option value="estudianten">Estudiante Nuevo</option>
</select>
<br>
<?php  echo form_label('Contraseña:','password')?>
<?php  echo form_input($pass)?>
<br>
<?php  echo form_label('Verificar la contraseña:','vpass')?>
<?php  echo form_input($vpass)?>
<br>

<?php  echo form_label('Fecha de nacimiento:','fnacimiento')?>
<?php  echo form_input($fnacimiento)?>
<br>

<?php  echo form_submit('','registrarse')?>
<?php  echo form_close()?>


</body>

<script>
	$('#fnacimiento').datepicker();
</script>

</html>