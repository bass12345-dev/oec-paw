<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $song_table = 'songs';
	public $member_table = 'members';
	public $order_by_desc = 'desc';
	public $order_key = 'created';

	public $artist_table = 'artist';
	public $singer_table = 'singers';
	public $admin_table = 'admin';
	public $post_table = 'posts';

	    public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('member_id')) {
            redirect('login');
        }
    }

	
	public function index()
	{

		$where = 'member_id ='.$this->session->userdata('member_id');
		$data['admin_access'] = $this->CountModel->count1($this->admin_table,$where);
		$data['members'] = $this->GetModel->get($this->member_table,$this->order_by_desc,$this->order_key);
		$data['singers'] = $this->GetModel->get3($this->member_table,$this->order_by_desc,$this->order_key); 
		$this->load->view('admin/index',$data);
	}

	public function load_feed(){

		$members = $this->GetModel->get8();
		
		$data = [];
		  foreach ($members as $row) {

        	$data[] = array(

        				'member_id' => $row['member_id'],
        				'full_name' => $row['full_name'],
        				'song' => $row['song'],
        				'artist' => $row['artist'],
        				'x' => $this->session->userdata('position') == 'singer' ? 0 : 1,
        				'song_id' => $row['post_id'],



        				
        	);

        }

        echo json_encode($data);

	}
}
