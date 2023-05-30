<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gigs extends CI_Controller {


	public $gig_table = 'gigs';
	public $order_by_desc = 'desc';
	 public $order_key = 'created';
	 public $member_table = 'members';
     public $admin_table = 'admin';

	    public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('member_id')) {
            redirect('login');
        }
    }

	
    public function add(){

    		$info = array(
			'location' => $this->input->post('location'),
			'event' => $this->input->post('event'),
            'number_of_sets' => $this->input->post('n_of_sets'),
			'date' => $this->input->post('date'),
			'time' => $this->input->post('time'),
			'created' =>  date('Y-m-d H:i:s', time()),
            'income' => $this->input->post('income'),
			'm_id' => $this->session->userdata('member_id'),

			);

		$add  = $this->AddModel->add($this->gig_table,$info);


	$params = array('cond' => $add, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);


    }


    public function load_calendar_of_gigs(){


            $data = [];

        $gigs = $this->GetModel->get_with_join_gigs1($this->gig_table,$this->order_by_desc,$this->order_key); 




        foreach ($gigs as $row) {




            $data[] = array(

                        'title'=> $row['event'],
                        'start'=> date('Y-m', strtotime($row['date'])),
                        'description'=> 'gig at '. $row['location'],
                        'className'=> 'fc-event-danger fc-event-solid-warning'
                        
            );
        
        }

        echo json_encode($data);

    }

    public function get_upcoming_gigs(){

     $data = [];
        $gigs = $this->GetModel->get_upcoming_gig1($this->gig_table,$this->order_by_desc,$this->order_key); 
         foreach ($gigs as $row) {




            $data[] = array(

                        'gig_id' => $row['gig_id'],
                        'location' => $row['location'],
                        'event' => $row['event'],
                        'time' =>  date('h : i a', strtotime($row['time'])),
                        'date' => date('M d Y', strtotime($row['date'])),
                        'created' =>date('M d Y', strtotime($row['created'])).' '. date('h : i a', strtotime($row['created'])),
                        'income' =>  $row['income']
                        

                        
            );
        
        }

        echo json_encode($data);


    }

    public function get_gigs(){


		

        $gigs = $this->GetModel->get_with_join_gigs1($this->gig_table,$this->order_by_desc,$this->order_key); 

         $where = 'member_id ='.$this->session->userdata('member_id');
        $admin_access = $this->CountModel->count1($this->admin_table,$where);

        foreach ($gigs as $row) {




        	$data[] = array(

        				'gig_id' => $row['gig_id'],
        				'location' => $row['location'],
        				'event' => $row['event'],
        				'time' =>  date('h : i a', strtotime($row['time'])),
        				'date' => date('M d Y', strtotime($row['date'])),
        				'created' =>date('M d Y', strtotime($row['created'])).' '. date('h : i a', strtotime($row['created'])),
        				'name' => $row['full_name'],
                        'number_of_sets' => $row['number_of_sets'],
                        'a' =>  date('Y-m-d') == date('Y-m-d', strtotime($row['date'])) ? TRUE : FALSE ,
                        'b' =>  $admin_access  > 0 ? 1 : 0
                        
                        // 'setlist' => $row['setlist']

        				
        	);
        
        }

        echo json_encode($data);



    }



        public function delete(){

            $where = 'gig_id ='.$_POST['id'];
            $delete = $this->DeleteModel->delete($this->gig_table,$where);
            $params = array('cond' => $delete, 'message' => 'Successfully Added');
            $this->load->library('Condition', $params);

        

        // $where = 'singer_id ='.$_POST['id'];
        
    }
}
