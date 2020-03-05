<?php
class User extends CI_Controller {

     function __construct(){
        parent::__construct();
        $this->load->model('User_model');
        


    }
    
    public function index() { 

      
        $this->load->view('admin/user');


        

    } 

    public function login() { 

             $this->load->view('admin/user');


    }

    public function proses_login() { 

        print_r($this->input->post());
        $user = $this->input->post('username'); 
        $pass = $this->input->post('password'); 

        $this->User_model->cek_user($user, $pass);




        if ($this->session->has_userdata('login')) { 
            // login berhasil 
            //echo $login;


            //print_r($login);
            redirect(site_url('admin/')); 
        } else { 
            // login gagal 
         

            $this->session->set_flashdata('gagal', 'Username atau Password Salah!'); 
            redirect(site_url('admin/login')); 
        } 
    } 
    public function logout(){
        $this->session->sess_destroy();
       // $this->load->view('admin/user');

                    redirect(site_url('admin/login')); 

    }
  
}