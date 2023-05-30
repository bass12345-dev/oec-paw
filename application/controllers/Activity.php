<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {


	public $member_table = 'members';
	public $singer_table = 'singers';
	 public $singer_songs = 'singer_songs';
	 	public $song_table = 'songs';
	 public $order_by_desc = 'desc';
	 	 public $order_key = 'created';

	public $admin_table = 'admin';
		public $todo_table = 'todo';
		public $income_table = 'income';
		public $gig_table = 'gigs';


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
		$this->load->view('view/activity',$data);
	}



	function money_logs(){

		$where = 'member_id ='.$this->session->userdata('member_id');
		$data['admin_access'] = $this->CountModel->count1($this->admin_table,$where);
		$this->load->view('view/money_logs',$data);

	}

  function add_todo(){

  		$info = array(
			'w_todo' => $this->input->post('todo'),
			'todo_amount' => $this->input->post('amount'),
			'created' =>  date('Y-m-d H:i:s', time()),
			
		);


		$result  = $this->AddModel->add($this->todo_table,$info);

		$params = array('cond' => $result, 'message' => 'Successfully Add');
		$this->load->library('Condition', $params);
  }


function get_todo(){



	 $items = $this->GetModel->get_todo($this->todo_table,$this->order_by_desc,$this->order_key);

	$data = [];


		foreach ($items as $row) {


        	

        	$data[] = array(

        			'w_todo' => $row['w_todo'],
        			'amount' => $row['todo_amount'] > 0 ? $row['todo_amount']  : '-' ,
        			'created' => $row['created'],
        			'todo_id' => $row['todo_id'],
        			
        			
        			
        	);
        	# code...
        }



        echo json_encode($data);
}

function update_todo(){


	$info = array(
			
			'w_todo' => $this->input->post('edit_todo'),
			'todo_amount' => $this->input->post('edit_amount'),
			
		);


	$where = 'todo_id ='.$this->input->post('edit_id');
	$update = $this->UpdateModel->update1($where,$info,$this->todo_table);
	
	$params = array('cond' => $update, 'message' => 'Successfully Updated');
	$this->load->library('Condition', $params);
}



function get_total_income(){

		$order_key = 'income.income_id';
			

        $artist = $this->GetModel->get($this->income_table,$this->order_by_desc,$order_key); 

        echo json_encode($artist);
}

function done(){



	$order_key = 'income.income_id';
	$a = 0;
	$a = $this->GetModel->get($this->income_table,$this->order_by_desc,$order_key)[0]['total_income'];
	$total = 0;


	if ($this->input->post('w_desc') == 'add' ) {


		$total = $a + $this->input->post('income');

		$info = array(
			'total_income' => $total,
			'w_table' => $this->input->post('table'),
			'to_id' => $this->input->post('id'),
			'created' =>  date('Y-m-d H:i:s', time()),
			
					);


		$result  = $this->AddModel->add($this->income_table,$info);

		$info1 = array(
			
			'income_w' => 1,
			
			
		);


		

		$params = array('cond' => $result, 'message' => 'Successfully Add');
		$this->load->library('Condition', $params);


		$where = 'gig_id ='.$this->input->post('id');
		$update = $this->UpdateModel->update1($where,$info1,$this->gig_table);


		// code...
	}else {

		$total = $a - $this->input->post('income');

		$info = array(
			'total_income' => $total,
			'w_table' => $this->input->post('table'),
			'to_id' => $this->input->post('id'),
			'created' =>  date('Y-m-d H:i:s', time()),
			
					);


			$result  = $this->AddModel->add($this->income_table,$info);

		$info1 = array(
			
			'if_done' => 1,
			
			
		);



		$params = array('cond' => $result, 'message' => 'Successfully Add');
		$this->load->library('Condition', $params);


		$where = 'todo_id ='.$this->input->post('id');
		$update = $this->UpdateModel->update1($where,$info1,$this->todo_table);



	}





	


}

}
