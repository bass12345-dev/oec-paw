<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artist extends CI_Controller {


	 public $artist_table = 'artist';
	  public $songs_table = 'songs';
	 public $order_by_desc = 'desc';
	 public $order_key = 'created';

	 public $admin_table = 'admin';
	 public $member_table = 'members';


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
		$data['singers'] = $this->GetModel->get3($this->member_table,$this->order_by_desc,$this->order_key); 
		$this->load->view('admin/index',$data);
	}

	public function add(){ 

		$info = array('artist_name' => $this->input->post('artist_name'),'created' =>  date('Y-m-d H:i:s', time()),);

		$result  = $this->AddModel->add($this->artist_table,$info);

		if ($result >  0 ) {

			$data = array(
				'message' => 'Success',
				'response' => true
			);
			# code...
		}else {

			$data = array(
				'message' => 'Error',
				'response' => false
			);

		}

		echo json_encode($data);

	}


	public function get_artist() {


		$data = [];
		$order_key = 'artist.artist_name';
		$asc = 'asc';

        $artist = $this->GetModel->get($this->artist_table,$asc,$order_key); 


     	


        foreach($artist as $row){

        	$where = 'songs.artist_id='.$row['artist_id'];

        	$count = $this->CountModel->count1($this->songs_table,$where);
				

				$data[] = array(

						'artist_id' => $row['artist_id'],
						'artist_name' => $row['artist_name'],
						'created' => $row['created'],
						'count' => $count

				); 
            

        } 
        echo json_encode($data);
	}


	public  function search_artist(){


		$key      = $_GET['key'];


        $artist = $this->SearchModel->search_artist($key);
        $data     = [];
        foreach ($artist as $row) {
            $data[] = $row;
        }

        echo json_encode($data);
	}

	public function delete(){
		foreach ($_POST['id'] as $row) {

					$where = 'artist_id ='.$row;
	

					$delete = $this->DeleteModel->delete($this->artist_table,$where);
				

			}



			$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);

			
	}
}
