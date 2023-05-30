<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public $member_table = 'members';
	public $order_by_desc = 'desc';
	 public $order_key = 'created';


        public function __construct()
    {
        parent::__construct();

         if ($this->session->userdata('member_id')) {
            redirect('');
        }
    }

	
	public function index()
	{
		$this->load->view('authentication/login.php');
	}

	public function verify(){

		// $info = array(

		// 		'username' => $_POST['username'],
		// 		'password' => $_POST['password']
		// );




				$info = array(
    				 	'username' => $this->input->post('username'),
					);


      $pass = $this->input->post('password');
      $verify = $this->CountModel->count1($this->member_table,$info);

      if ($verify > 0) {

      		$data['response'] = true ; 
    
            $user = $this->GetModel->get_data_selected($this->member_table,$info);
            $x = password_verify($pass,$user['password']); 
            if ($x) {
                      $data['res'] = true;
                      $data['message'] = 'Success';
                      $this->session->set_userdata($user);

            }else {

                      $data['res'] = false; 
                      $data['message'] = 'Invalid Password'; 
            }
       		
       	}else {

 
       		$data['response'] = false ;
          $data['message'] = 'Username Not Found'; 

       	}

       	echo json_encode($data);
		
	}
}
