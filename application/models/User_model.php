<?php

class User_model extends CI_Model {

public function cek_user($username, $password) {
     $periksa = $this->db->get_where
     ('user',array('username'=>$username,'password'=>($password)));
     	if($periksa->num_rows()>0){
     		$data=$periksa->result();
	       $this->session->set_userdata('login',$data); 

	 	}else{
	    return 0;
	  	}
	}
}
















//     $this->db->where(‘username’ , ‘$username’”);
//     $this->db->where(‘password’, md5($password));
//     $query = $this->db->get(‘user’);
//     return $query->row_array();
//   }
// }