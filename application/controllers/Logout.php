
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {



	public function out(){
		 $this->load->library('session');
        $this->session->unset_userdata('member_id');
        // delete_cookie('SESSION_TOKEN',);
        redirect('login');
	}


}