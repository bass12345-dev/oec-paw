<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setlist extends CI_Controller {

	public $song_table = 'songs';
	public $member_table = 'members';
	public $order_by_desc = 'desc';
	public $order_key = 'created';

	public $artist_table = 'artist';
	public $singer_table = 'singers';
	public $admin_table = 'admin';
	public $setlist_table = 'setlists';

	public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('member_id')) {
            redirect('login');
        }
    }
	public function index()
	{
		$data['singers'] = $this->GetModel->get($this->singer_table,$this->order_by_desc,$this->order_key);
		$where = 'member_id ='.$this->session->userdata('member_id');
		$data['admin_access'] = $this->CountModel->count1($this->admin_table,$where);


		$data['singers'] = $this->GetModel->get3($this->member_table,$this->order_by_desc,$this->order_key); 


		if(isset($_GET['view'])){

			if($_GET['view'] == 'songs'){

					$this->load->view('view/view_setlist',$data);

			}

		}else {
		
		$this->load->view('admin/index',$data);
	}
	}


	function add(){


		$where = array('g_id' => $this->input->post('gig_id'));		
		$item = $this->CountModel->count1($this->setlist_table,$where);

		if ($item == 1) {

		$data = array(
			
			'setlist' => $this->input->post('setlist'));
			
		$update = $this->UpdateModel->update1($where,$data,$this->setlist_table);

		$params = array('cond' => $update, 'message' => 'Successfully updated');
		$this->load->library('Condition', $params);




			# code...
		}else {


			$info = array(
			'g_id' => $this->input->post('gig_id'),
			'setlist' => $this->input->post('setlist'),
			'created' =>  date('Y-m-d H:i:s', time()));

		$result  = $this->AddModel->add($this->setlist_table,$info);

		$params = array('cond' => $result, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);

		}


		
		

	}


	public function save_selected_song(){

		$info = array(
			'g_id' => $this->input->post('gig_id'),
			'son_id' => $this->input->post('song_id'),
			'set_number' => $this->input->post('set_number'),
			'singe_id' => $this->input->post('singer_id'),
			'created' =>  date('Y-m-d H:i:s', time()));

		$result  = $this->AddModel->add($this->setlist_table,$info);

		$params = array('cond' => $result, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);
		
	}

function get_setlist(){

		$where = array('g_id' => $this->input->post('id'));


		$item = $this->GetModel->get_data_selected($this->setlist_table,$where);

		echo json_encode($item);
}


function get_setlist_songs(){


	// $songs = $this->GetModel->get_setlist_songs($_POST['gig_id']);
	$data = [];

	$set = [];
	$song = [];

	for ($i=0; $i < $_POST['set_number'] ; $i++) { 

		// array_push($set,$i + 1);


		$songs = $this->GetModel->get_setlist_songs($_POST['gig_id'],$i + 1);

		array_push($set,$songs);
		
	}


	echo json_encode($set);

	// foreach($set as $a){


	// 	$set = [];


	// 	foreach($songs as $row){



	// 	}




	// }


	

        // foreach($songs as $row){



        //     	$data[] = array(


        //     			'setlist_id' => $row['setlist_id'],
        //     			'set_number' => $row['set_number'],
        //     			'singer' => $row['full_name'],
        //     			'song' =>  $row['song_title']

        //     	);
		            

        // } 
        // echo json_encode($data);

	// $data = [];
	// $count = 0;

	// for ($i=0; $i < $_POST['set_number'] ; $i++) { 

	// 	$count =  $i + 1;

	// 	$songs = $this->GetModel->get_setlist_songs($count,$_POST['gig_id']);



	// 	// code...
	// }


}

function delete_setlist_song(){

	$where = 'setlist_id ='.$_POST['id'];
	$delete = $this->DeleteModel->delete($this->setlist_table,$where);
	$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
	$this->load->library('Condition', $params);
}



	public function update_selected_song(){
		$data = array(

				// 'set_number' => $_POST['set_number'],
				'son_id' =>$_POST['song_id'],
				'singe_id' => $_POST['singer_id']
		);

		$where = 'setlist_id ='.$_POST['setlist_id'];

		$update = $this->UpdateModel->update1($where,$data,$this->setlist_table);
	

		$params = array('cond' => $update, 'message' => 'Successfully Updated');
			$this->load->library('Condition', $params);
	}
}
