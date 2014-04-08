<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bienbenido a Nuestra U </title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/bootstrap.css">
    <script type="text/javascript" src="<?php echo base_url();?>media/js/jquery-2.1.0.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>media/js/bootstrap.js"></script>
</head>
<body>
    <?php
    $Nombres= array('Nombres'=> 'Nombres',' placeholder' => 'nombre de usuario');
    $contraseña = array('name' => 'contraseña',    'placeholder' => 'introduce tu password');
    $submit = array('name' => 'submit', 'value' => 'Iniciar sesión', 'title' => 'Iniciar sesión');
    ?>
    <div>
    <div class="container">
        <div class="row">
            <div style="max-height:300px;overflow:hidden">
         <img src="<?php echo base_url();?>/mecanica.jpg" alt="Facultad de Mecanica" class="img-thumbnail" style="margin-top:-100px"/>
         </div>   
        <h1>Formulario de login con varios perfiles de usuario</h1>
        </div>
        <div class="col-md-3" id="login">
            <div class="grid_8 push_2" id="formulario_login">
                <div class="grid_6 push_1" id="campos_login">
                    <?php echo form_open(base_url().'index.php/registro/login')?>
                    <label for="correo">Correo Electronico:</label>
                    <?php echo form_input($Nombres)?><p><?=form_error('correo')?></p>
                    <label for="contraseña">Introduce tu password:</label>
                    <?php echo form_password($contraseña)?><p><?=form_error('password')?></p>
                    <?php echo form_submit($submit)?>
                    <?php echo form_close()?>
                    
                </div> 
            </div>
            <a href="<?php echo base_url(); ?>index.php/registro/ingresardatos">Registrarse</a>
        </div>
    </div>
</div>
    </body>
</body>
</html>