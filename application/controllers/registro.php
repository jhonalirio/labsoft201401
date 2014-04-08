<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load-> model('registro_model');
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        $this->load->database('default');
    }
        function index() {
            $this->load->view('registro/headers');
            $this->load->view('registro/vista');
            //$this->load->view('welcome_message');
            //$this->load->view('registro/Conexion');
            switch ($this->session->userdata('perfil')) {
            case '':
                $data['token'] = $this->token();
                $data['titulo'] = 'Login con roles de usuario ';
                //$this->load->view('Conexion',$data);
                break;
            case 'administrador':
                redirect(base_url().'admin');
                break;
            case 'Administrativo':
                redirect(base_url().'Administrativo');
                break;    
            case 'Estudiante_viejo':
                redirect(base_url().'Estudiante_viejo');
                break;
            case 'Estudiante_Nuevo':
                redirect(base_url().'Estudiante_Nuevo');
                break;
            default:        
                $data['titulo'] = 'Login con roles de usuario en codeigniter';
                $this->load->view('welcome_message',$data);
                break;        
        }
         }
         function new_user()
    {
        if($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token'))
        {
            $this->form_validation->set_rules('Nombres', 'nombre de usuario', 'required|trim|min_length[2]|max_length[150]|xss_clean');
            $this->form_validation->set_rules('contrasena', 'password', 'required|trim|min_length[5]|max_length[150]|xss_clean');
 
            //lanzamos mensajes de error si es que los hay
            
            if($this->form_validation->run() == FALSE)
            {
                $this->index();
            }else{
                $username = $this->input->post('Nombres');
                $password = sha1($this->input->post('contrasena'));
                $check_user = $this->login_model->login_user($Nombres,$contrasena);
                if($check_user == TRUE)
                {
                    $data = array(
                    'is_logued_in' =>TRUE,
                    'ID'=> $check_user->id,
                    'perfil'=> $check_user->perfil,
                    'Nombres'=>$check_user->Nombres
                    );        
                    $this->session->set_userdata($data);
                    $this->index();
                }
            }
        }else{
            redirect(base_url().'login');
        }
    }
        function token()
    {
        $token = md5(uniqid(rand(),true));
        $this->session->set_userdata('token',$token);
        return $token;
    }
        function nuevo() {
            $this->load->view('registro/headers');
            $this->load->view('registro/vista');
         }
        function crear() {
            $this->load->view('registro/headers');
            $this->load->view('registro/formulario');
         }
        function ingresardatos(){
            $email = $this->input->post('correoeletronico');
            if ($this->registro_model->userAlreadyExist($email)){
                echo "ya esta registrado";
                return;
                }
            $this->form_validation->set_rules('password','Contraseña','required|matches[vpassword]');
            if ($this->form_validation->run()){


            $data = array(
                'ID'=> $this-> input->post('ID'),
                'Nombres'=> $this-> input->post('Nombres'),
                'Apellidos'=> $this-> input->post('Apellidos'),
                'Direccion'=> $this-> input->post('Direccion'),
                'Telefon'=> $this-> input->post('Telefon'),
                'Sexo'=> $this-> input->post('Sexo'),
                'correoeletronico'=> $this-> input->post('correoeletronico'),
                'rol'=> $this-> input->post('rol'),
                );
            $this->registro_model->crearregistro($data);
            
        }
        $this->load->view('registro/headers');
            $this->load->view('registro/vista');
        }

        function login(){
            
        }


}

 ?>