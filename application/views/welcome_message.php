<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienbenido a Nuestra U </title>
	<style> 
		body{
			font-family: Arial,"Melvetica";
		}
	</style>
	<div id="container">
	<MARQUEE><span style="color: #507ADC;"><big><h1><?php $string ?> Facultadad De Mecánica</h1></span></MARQUEE>
    <IMG SRC="http://localhost/codeigniter/mecanica.jpg"width='250' height='250'>
</head>
<body>
    <?php
    $Nombres= array('Nombres'=> 'Nombres',' placeholder' => 'nombre de usuario');
    $contraseña = array('name' => 'contraseña',    'placeholder' => 'introduce tu password');
    $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
    ?>
    <div class="container_12">
        <h1>Formulario de login con varios perfiles de usuario</h1>
        <div class="grid_12" id="login">
            <div class="grid_8 push_2" id="formulario_login">
                <div class="grid_6 push_1" id="campos_login">
                    <?php echo form_open(base_url().'ingresardatos')?>
                    <label for="Nombres">Nombre de usuario:</label>
                    <?php form_input($Nombres)?><p><?=form_error('Nombres')?></p>
                    <label for="contraseña">Introduce tu password:</label>
                    <?php echo form_password($contraseña)?><p><?=form_error('password')?></p>
                    <?php echo form_hidden('token',$token)?>
                    <?php echo form_submit($submit)?>
                    <?php echo form_close()?>
                    <?php 
                    if($this->session->flashdata('usuario_incorrecto')) 
                    {
                    ?>
                    <p><?php $this->session->flashdata('usuario_incorrecto')?></p>
                    <?php
                    }
                    ?>
                </div> 
            </div>
        </div>
    </div>
    </body>
			}
		?>
</body>
</html>