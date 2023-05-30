<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Singers extends CI_Controller {



	public $song_table = 'songs';
	 public $order_by_desc = 'desc';
	 public $order_key = 'created';
	 public $artist_table = 'artist';

	 public $singer_table = 'singers';
	 public $singer_songs = 'singer_songs';
	 public $member_table = 'members';

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
		if(isset($_GET['view'])){

			if($_GET['view'] == 'songs'){



			
					$where = array('member_id' => $_GET['id']);

					$singer = $this->GetModel->get_data_selected($this->member_table,$where);
					

					$where2 = 'singer_songs.si_id = '.$_GET['id'];
					
					$songs = $this->GetModel->get2($this->singer_songs,$where2,$this->order_by_desc,$this->order_key);



					// print_r($songs);

				//     $data = [];


                   // foreach ($songs as $row) :

                   //  // array_push($data,$row['song_title']);



                   // endforeach;
					

					$data['data'] = $songs;

					
		



					$data['singer_name'] = $singer['full_name'];
					$data['items'] = $songs;	

					
					

				$this->load->view('view/view_songs',$data);

			}

		}else {



			$this->load->view('admin/index',$data);

		}
	}


		public function add(){ 

		$info = array(
			'singer_name' => $this->input->post('singer_name'),
			'created' =>  date('Y-m-d H:i:s', time()));

		$result  = $this->AddModel->add($this->singer_table,$info);

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

	public function get_singers(){


		$data = [];
	
        $members = $this->GetModel->get3($this->member_table,$this->order_by_desc,$this->order_key); 


       	

        foreach ($members as $row) {


        	if ($row['type'] == 'member') {
        		# code...
        	

        	$where1 = 'singer_songs.si_id='.$row['member_id'];
        	$count = $this->CountModel->count1($this->singer_songs,$where1);

        	$data[] = array(

        				'singer_id' => $row['member_id'],
        				'singer_name' => $row['full_name'],
        				'count' => $count,
        				'profile_pic' => $row['profile_pic'] == ''  ? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'  :  base_url().'uploads/'.$row['profile_pic'],
        	);

        }
        
        }


        echo json_encode($data);

	}


		public function get_singers_session(){


		$data = [];
	
        $members = $this->GetModel->get3($this->member_table,$this->order_by_desc,$this->order_key); 


       	

        foreach ($members as $row) {


        	if ($row['type'] == 'session') {
        		# code...
        	

        	$where1 = 'singer_songs.si_id='.$row['member_id'];
        	$count = $this->CountModel->count1($this->singer_songs,$where1);

        	$data[] = array(

        				'singer_id' => $row['member_id'],
        				'singer_name' => $row['full_name'],
        				'count' => $count,
        				'profile_pic' => $row['profile_pic'] == ''  ? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png'  :  base_url().'uploads/'.$row['profile_pic'],
        	);

        }
        
        }


        echo json_encode($data);

	}


	public function get_singer_songs(){


		$singers = $this->GetModel->get3($this->member_table,$this->order_by_desc,$this->order_key); 

		$data = [];


		foreach ($singers as $row) {

        	$where1 = 'singer_songs.si_id = '.$row['member_id'];
        	$where2 = 'singer_songs.so_id = '.$this->input->post('id');

        	$x = $this->GetModel->get_data_selected1($this->singer_songs,$where1,$where2);



        	

        	$data[] = array(

        			'singer_name' => $row['full_name'],
        			'singer_id' => $row['member_id'],
        			'x' => count($x) == 1 ? 'checked' : ''
        			
        			
        	);
        	# code...
        }



        echo json_encode($data);

	
			// $order_key = 'created';
        // $singers = $this->GetModel->get($this->singer_table,$this->order_by_desc,$this->order_key); 

        // $data = [];


        // foreach ($singers as $row) {

        // 	$where1 = 'singer_songs.si_id = '.$row['singer_id'];
        // 	$where2 = 'singer_songs.so_id = '.$this->input->post('id');

        // 	$x = $this->GetModel->get_data_selected1($this->singer_songs,$where1,$where2);



        	

        // 	$data[] = array(

        // 			'singer_name' => $row['singer_name'],
        // 			'singer_id' => $row['singer_id'],
        // 			'x' => count($x) == 1 ? 'checked' : ''
        			
        			
        // 	);
        // 	# code...
        // }



        // echo json_encode($data);

	}


	function condition($success,$message){
				if ($success) {


			$data = array(
				'message' => $message,
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

	public function delete(){


		
		
		

		if (is_array($_POST['id'])) {

			foreach ($_POST['id'] as $row) {

					$where = 'singer_id ='.$row;
					$where1 = 'si_id='.$row;

					$delete = $this->DeleteModel->delete($this->singer_table,$where);
					$this->DeleteModel->delete($this->singer_songs,$where1);

			}



			$this->condition($delete,$message='Successfully Deleteed');

		}else {

			$where = 'singer_id ='.$_POST['id'];
			$where1 = 'si_id='.$_POST['id'];
			$delete = $this->DeleteModel->delete($this->singer_table,$where);
			$this->DeleteModel->delete($this->singer_songs,$where1);
			$this->condition($delete,$message='Successfully Deleteed');

		}

		// $where = 'singer_id ='.$_POST['id'];
		
	}


	public function update(){
		$data = array(

				'singer_name' => $_POST['singer']
		);

		$where = 'singer_id ='.$_POST['id'];

		$update = $this->UpdateModel->update1($where,$data,$this->singer_table);
		$this->condition($update,$message='Successfully Updated');
	}



	public function add_singer_song(){



		$info1 = array(

						'so_id' => $this->input->post('song_id'),
						'si_id' => $this->input->post('singer_id'),
						'created' => date('Y-m-d H:i:s', time())
				);
		$success = $this->AddModel->add($this->singer_songs,$info1);

		$params = array('cond' => $success, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);
	}




	public function delete_singer_song(){



		$info1 = array(

						'so_id' => $this->input->post('song_id'),
						'si_id' => $this->input->post('singer_id'),
						
				);
		$success = $this->DeleteModel->delete($this->singer_songs,$info1);

		$params = array('cond' => $success, 'message' => 'Successfully Added');
		$this->load->library('Condition', $params);


		
		

	}


		public  function search_singers(){


		$key      = $_GET['key'];


        $artist = $this->SearchModel->search_singers($key);
        $data     = [];
        foreach ($artist as $row) {
            $data[] = $row;
        }

        echo json_encode($data);
	}





// 	public function add_singer_song(){


// 		$success = '';
// 		$x  = '';


// 		$where3 = array('so_id' => $this->input->post('song_id'));
// 		$s = $this->GetModel->get1($this->singer_songs,$where3,$this->order_by_desc,$this->order_key);


// 		foreach ($this->input->post('ids') as $row) {

// 			$where1 = array('si_id' => $row);
// 			$where2 = array('so_id' => $this->input->post('song_id'));
//         	$x = $this->CountModel->count2($this->singer_songs,$where1,$where2);




// 			if ($x  > 0) {


// 				$info = array(

// 						'so_id' => $this->input->post('song_id'),
// 						// 'si_id' => $row,
// 						// 'created' => date('Y-m-d H:i:s', time())
// 				);





// 				$success = $this->DeleteModel->delete2($this->singer_songs,$where1,$where2);
// 				// $success = $this->UpdateModel->update2($where1,$where2,$info,$this->singer_songs);
// 				}	


//         	else {
				
// 				$info1 = array(

// 						'so_id' => $this->input->post('song_id'),
// 						'si_id' => $row,
// 						'created' => date('Y-m-d H:i:s', time())
// 				);




// 				$success = $this->AddModel->add($this->singer_songs,$info1);


// 			# code...
// 		}

	




// 	}



	// $params = array('cond' => $success, 'message' => 'Successfully Added');
	// 	$this->load->library('Condition', $params);


// }

	public function get_singer_songs1(){

		$where2 = 'singer_songs.si_id = '.$_POST['id'];
		$songs = $this->GetModel->get2($this->singer_songs,$where2,$this->order_by_desc,$this->order_key);
		echo json_encode($songs);
	}


}