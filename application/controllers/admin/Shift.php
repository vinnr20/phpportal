<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

    function __construct(){

        parent::__construct();
        $this->load->model("Overview_model");

        if ($this->session->has_userdata('login')) { 
        } 

            else { 
            redirect(site_url('admin/login')); 
            } 
        }

    public function shift(){
    	$this->load->view('admin/shift/new_form');
    }
}