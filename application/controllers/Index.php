<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public $song_table = 'songs';
	public $member_table = 'members';
	public $order_by_desc = 'desc';
	public $order_key = 'created';

	public $artist_table = 'artist';
	public $singer_table = 'singers';
	
	public function index()
	{
		$data['singers'] = $this->GetModel->get($this->singer_table,$this->order_by_desc,$this->order_key);
		
		$this->load->view('users/index',$data);
	}


	public function logout(){
		 $this->load->library('session');
        $this->session->unset_userdata('member_id');
        // delete_cookie('SESSION_TOKEN',);
        redirect('login');
	}
}
