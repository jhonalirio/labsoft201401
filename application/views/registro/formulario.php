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
