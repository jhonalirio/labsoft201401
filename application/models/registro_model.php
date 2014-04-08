<?php if ( ! defined('BASEPATH')) exit('No se permite acceso directo al script');

class Registro_model extends CI_Model{
    
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
    }

    function crearregistro($data){
        $this->db->insert('usuarios',array('Nombres'=>$data['Nombres'],'Apellidos'=>$data['Apellidos'],'Direccion'=>$data['Direccion'],'Telefon'=>$data['Telefon'],'Sexo'=>$data['Sexo'],'correoeletronico'=>$data['correoeletronico'],'rol'=>$data['rol']));
    }

    function getLogin($username,$password)
        {
        //comprobamos que el nombre de usuario y contraseña coinciden
        $data = array(
        'username' => $username,
        'password' => $password
        );
       
        $query = $this->db->get_where('usuarios',$data);
        return $query->result_array();
        }
       
       
     function isLogged()
        {
        //Comprobamos si existe la variable de sesión username. En caso de no existir, le impediremos el paso a la página para usuarios registrados
       
            if(isset($this->session->userdata['username']))
            {
            return TRUE;
            }
            else
            {
            return FALSE;
            }  
        }   
      function close()
        {
        //cerrar sesión
        return $this->session->sess_destroy();
        }


        function userAlreadyExist($email){
            return sizeof($this->db->query("SELECT * FROM usuarios where lower(correoeletronico) = lower('$email') ")->result()) > 0;
        }
}
?> 