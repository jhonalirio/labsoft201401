	<MARQUEE><span style="color: #507ADC;"><big><h1>Bienvenidos a la Facultad de Ingenería Mecánica de la Universidad tecnologica de Pereira </h1></span></MARQUEE>

	<?php  echo form_open("/registro/ingresardatos")?>
<?php
	$ID = array(
		'name'=> 'ID',
		'placeholder' => 'ingresa tu id'
	 );
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
?>
<?php echo form_label('ID:','ID')?>
<?php echo form_input($ID)?>
<br>
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
<?php  echo form_input($rol)?>
<br>
<?php  echo form_submit('','registrarse')?>
<?php  echo form_close()?>


</body>
</html>