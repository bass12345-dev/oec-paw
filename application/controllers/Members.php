<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public $member_table = 'members';
	public $singer_table = 'singers';
	 public $singer_songs = 'singer_songs';
	 	public $song_table = 'songs';
	 public $order_by_desc = 'desc';
	 	 public $order_key = 'created';


	 	 	public $admin_table = 'admin';

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


			$info = array(
			'full_name' => $this->input->post('member_name'),
			'created' =>  date('Y-m-d H:i:s', time()),
			'position' => $this->input->post('position'),
			'email' => '',
			'username' => $this->get_first_word($this->input->post('member_name')),
			'password' => password_hash('pass', PASSWORD_DEFAULT),
			'type' => $this->input->post('type'),



		);


			
			
			
		$result  = $this->AddModel->add($this->member_table,$info);

		$params = array('cond' => $result, 'message' => 'Successfully Add');
		$this->load->library('Condition', $params);
}


function get_first_word($name){

	$arr = explode(' ',trim($name));
	return $arr[0];

}


public function get_members(){

		$data = [];

        $members = $this->GetModel->get($this->member_table,$this->order_by_desc,$this->order_key); 

        $where = 'member_id ='.$this->session->userdata('member_id');
		$admin_access = $this->CountModel->count1($this->admin_table,$where);

        foreach ($members as $row) {


        	if ($row['type'] == 'member') {
        		# code...
        	

        	

        	$data[] = array(

        				'member_id' => $row['member_id'],
        				'full_name' => $row['full_name'],
        				// 'position' => $row['position'],
        				'position' => $row['type'] == 'session' ? $row['type'].' '.$row['position'] : $row['position'],
        				'profile_pic' => $row['profile_pic'] == ''  ? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'  :  base_url().'uploads/'.$row['profile_pic'],
        				'a' => $admin_access  > 0 ? 1 : 0

        				
        	);

        }
        
        }

        echo json_encode($data);


}


public function get_sessions(){

		$data = [];

        $members = $this->GetModel->get($this->member_table,$this->order_by_desc,$this->order_key); 

        $where = 'member_id ='.$this->session->userdata('member_id');
		$admin_access = $this->CountModel->count1($this->admin_table,$where);

        foreach ($members as $row) {


        	if ($row['type'] == 'session') {
        		# code...
        	

        	

        	$data[] = array(

        				'member_id' => $row['member_id'],
        				'full_name' => $row['full_name'],
        				// 'position' => $row['position'],
        				'position' => $row['type'] == 'session' ? $row['type'].' '.$row['position'] : $row['position'],
        				'profile_pic' => $row['profile_pic'] == ''  ? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'  :  base_url().'uploads/'.$row['profile_pic'],
        				'a' => $admin_access  > 0 ? 1 : 0

        				
        	);

        }
        
        }

        echo json_encode($data);


}


	public function update(){
		$data = array(

				'full_name' => $_POST['member'],
				'position' =>$_POST['position']
		);

		$where = 'member_id ='.$_POST['id'];

		$update = $this->UpdateModel->update1($where,$data,$this->member_table);
	

		$params = array('cond' => $update, 'message' => 'Successfully Updated');
			$this->load->library('Condition', $params);
	}



public function delete(){


		
		
		

		if (is_array($_POST['id'])) {

			foreach ($_POST['id'] as $row) {

					$where = 'member_id ='.$row;
					

					$delete = $this->DeleteModel->delete($this->member_table,$where);
					

			}


			$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);

			// $this->condition($delete,$message='Successfully Deleteed');

		}else {

			$where = 'member_id ='.$_POST['id'];
			$delete = $this->DeleteModel->delete($this->member_table,$where);
			$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);

		}

		// $where = 'singer_id ='.$_POST['id'];
		
	}


	public function user_data(){
		$where = 'members.member_id = '.$this->session->userdata('member_id');
		$member = $this->GetModel->get_data_selected($this->member_table,$where);

		$data = array(

				'full_name' => $member['full_name'],
				'position' => $member['position'],
				'username' => $member['username'],
				'profile_pic' => $member['profile_pic'] == ''  ? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'  :  base_url().'uploads/'.$member['profile_pic'],
				'email' => $member['email'],
				'phone_number' => $member['phone_number'],
				
				
		);
		echo json_encode($data);
	}



public function check_contact(){



		$where = 'members.member_id = '.$this->session->userdata('member_id');
		$members = $this->GetModel->get_data_selected($this->member_table,$where);

		$x= 1;

		if ($members['phone_number'] == '' || $members['email'] =='') {

			$x = 0;

			# code...
		}

		echo $x;


}



	public  function search_member(){


		$key      = $_GET['key'];
        $items = $this->SearchModel->search_member($key);
        $data     = [];
        foreach ($items as $row) {
            $data[] = array(
            		'full_name' => $row['full_name'],
            		'member_id' => $row['member_id']
            );
        }

        echo json_encode($data);
	}


}
