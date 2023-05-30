<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyProfile extends CI_Controller {


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
		$this->load->view('view/view_my_profile',$data);
	}

	public function update_profile_pic(){


		$data = array(

				'profile_pic' =>$this->upload(),
		);

		$where = 'member_id ='.$this->session->userdata('member_id');


		$update = $this->UpdateModel->update1($where,$data,$this->member_table);
	

		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);

		


	
	}


function upload()
  {
    if (isset($_FILES['image'])) {

        $extension = explode('.', $_FILES['image']['name']);

        $new_name = rand().'.' . $extension[1];
        $destination = './uploads/'. $new_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        return $new_name;
      # code...
    }
  }

  function update_contact(){



  		$data = array(

				'email' =>$_POST['email'],
				'phone_number' =>$_POST['phone_number'],
		);

		$where = 'member_id ='.$this->session->userdata('member_id');

		$update = $this->UpdateModel->update1($where,$data,$this->member_table);
	

		$params = array('cond' => $update, 'message' => 'Successfully Updated');
		$this->load->library('Condition', $params);

  }


  function add_admin(){

  		$info = array(
			'member_id' => $this->input->post('s_member_id'),
			'created' =>  date('Y-m-d H:i:s', time()),
			
		);


		$result  = $this->AddModel->add($this->admin_table,$info);

		$params = array('cond' => $result, 'message' => 'Successfully Add');
		$this->load->library('Condition', $params);
  }


function get_admin(){



	 $items = $this->GetModel->get_with_join_admin1($this->admin_table,$this->order_by_desc,$this->order_key);

	$data = [];


		foreach ($items as $row) {


        	

        	$data[] = array(

        			'full_name' => $row['full_name'],
        			'member_id' => $row['member_id'],
        			'profile_pic' => $row['profile_pic'] == ''  ? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'  :  base_url().'uploads/'.$row['profile_pic'],
        			
        			
        	);
        	# code...
        }



        echo json_encode($data);
}

function update_security(){


	$info = array(
			
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('confirm_password'), PASSWORD_DEFAULT),
			
		);


	$where = 'member_id ='.$this->session->userdata('member_id');
	$update = $this->UpdateModel->update1($where,$info,$this->member_table);
	
	$params = array('cond' => $update, 'message' => 'Successfully Updated');
	$this->load->library('Condition', $params);
}

}
