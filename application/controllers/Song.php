<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Song extends CI_Controller {

	
	 public $song_table = 'songs';
	 public $order_by_desc = 'desc';
	  public $order_by_asc = 'asc';
	 public $order_key = 'created';

	 public $artist_table = 'artist';
	 public $singer_table = 'singers';


	 public $admin_table = 'admin';
	 public $member_table = 'members';
	 public $singer_songs = 'singer_songs';
	 public $post_table = 'posts';
	 public $prac_table = 'prac_songs';



	 public function __construct()
    {
        parent::__construct();

         if (!$this->session->userdata('member_id')) {
            redirect('login');
        }
    }

    public function load_songs(){
	$where1 = 'singer_songs.so_id = songs.song_id';
	$where2 = 'singer_songs.si_id = '.$_POST['singer_id'];
	$where3 = 'songs.song_type =  "'.$this->input->post('song_type').'"';
	$songs = $this->GetModel->get4($this->singer_songs,$where1,$where2,$where3,$this->order_by_desc,$this->order_key);
	echo json_encode($songs);


}

   


public function post_song(){

	$where = array('artist_name' => $this->input->post('song_artist3') );
	$count = $this->CountModel->count1($this->artist_table,$where);

	if ($count < 1) {

		$info = array('artist_name' => $where['artist_name'],'created' =>  date('Y-m-d H:i:s', time()),);
		$this->AddModel->add($this->artist_table,$info);

	}

	$data = array(

		'song' => $this->input->post('post_song_title'),
		'artist' => $this->input->post('song_artist3'),
		'post_type' =>  $this->input->post('post_type_song'),
		'created' =>  date('Y-m-d H:i:s', time()),
		'member_id' => $this->session->userdata('member_id')

	);

	$add  = $this->AddModel->add($this->post_table,$data);

	$id = $this->db->insert_id();


	if ($add) {

		$s = $this->GetModel->get9($this->member_table,$this->order_by_desc,$this->order_key);

		foreach ($s as $row) {

			$data1 = array(

						'pos_id' => $id,
						'mems_id' => $row['member_id']
			);


			
			$this->AddModel->add($this->prac_table,$data1);
		}


		# code...
	}


	$params = array('cond' => $add, 'message' => 'Successfully Added');
	$this->load->library('Condition', $params);
}


public function delete(){


		
		
		

		if (is_array($_POST['id'])) {

			// $this->condition($delete,$message='Successfully Deleteed');

			if(count($_POST['id']) > 1) {


				foreach ($_POST['id'] as $row) {

						
						$where = 'song_id ='.$row;
						$delete = $this->DeleteModel->delete($this->song_table,$where);
						
					

						}

			
			$params = array('delete' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);


			}else {

			$where = 'song_id ='.$_POST['id'][0];
			$delete = $this->DeleteModel->delete($this->song_table,$where);
			$params = array('cond' => $delete, 'message' => 'Successfully Deleted');
			$this->load->library('Condition', $params);
			

			}

		}

		
		
	}



public function shuffle_songs(){

	// print_r($this->input->post('number_of_sets


	$number_of_songs = $this->input->post('number_of_songs') == '' ? 10  : $this->input->post('number_of_songs');
	$event_type = $this->input->post('event_type');
	
	$number_of_sets = $this->input->post('number_of_sets');
	$song_type = ['first set','upbeat'];
	$data = [];

	

	if (is_array($_POST['singer_ids'])) {

			// $this->condition($delete,$message='Successfully Deleteed');

			if(count($_POST['singer_ids']) > 0) {


				foreach ($_POST['singer_ids'] as $row) {



					$where = array('member_id' => $row);
					$singer = $this->GetModel->get_data_selected($this->member_table,$where);

					$where1 = 'singer_songs.so_id = songs.song_id';
					$where2 = 'singer_songs.si_id = '.$row;
					$where3 = 'songs.song_type =  "first set"';
					$where4 = 'songs.song_type =  "upbeat"';

					$songs = $this->GetModel->get6($this->singer_songs,$where1,$where2,$this->order_by_desc,$this->order_key,$number_of_songs);

					$first_set = $this->GetModel->get5($this->singer_songs,$where1,$where2,$where3,$this->order_by_desc,$this->order_key,$number_of_songs);
					$upbeat =  $this->GetModel->get5($this->singer_songs,$where1,$where2,$where4,$this->order_by_desc,$this->order_key,$number_of_songs);


						if ($number_of_sets == 1) {

							


							$dat = array(
								'singer_name' => $singer['full_name'],
								'songs' => array( 

												'first_set' => $songs
												
								)
							);
						}else if ($number_of_sets == 2) {

							
								

								
								$dat = array(
											'singer_name' => $singer['full_name'],
											'songs' => array( 

															'first_set' => $first_set,
															'second_set' => $upbeat
											)
								);

						}else if ($number_of_sets == 3) {


							$dat = array(
											'singer_name' => $singer['full_name'],
											'songs' => array( 

															'first_set' => $first_set,
															'second_set' => $songs,
															'third_set' => $upbeat
											)
								);
							# code...
						}


					



						array_push($data, $dat);


				}

			}
	}

	echo json_encode($data);





}

public function new_songs_added() {


		$data = [];


		$tables = $this->song_table.','.$this->artist_table;

		$where = 'songs.artist_id = artist.artist_id';

		$order_key = 'songs.song_id';
		$asc = 'desc';

        $songs = $this->GetModel->get1limit($tables,$where,$asc,$order_key); 


        // echo json_encode($songs);


        foreach($songs as $row){

            	$data[] = array(


            			'song_title' => $row['song_title'],
            			'artist_name' => $row['artist_name'],
            			'song_id' => $row['song_id'],
            			'created' => $row['created'],


            	);
		            

        } 
        echo json_encode($data);
	}




public function get_songs() {


		$data = [];


		$tables = $this->song_table.','.$this->artist_table;

		$where = 'songs.artist_id = artist.artist_id';

		$order_key = 'songs.song_title';
		$asc = 'asc';

        $songs = $this->GetModel->get1($tables,$where,$asc,$order_key); 


        // echo json_encode($songs);


        foreach($songs as $row){

            	$data[] = array(


            			'song_title' => $row['song_title'],
            			'artist_name' => $row['artist_name'],
            			'song_id' => $row['song_id'],
            			'created' => $row['created'],


            	);
		            

        } 
        echo json_encode($data);
	}

		public function get_song(){

		 $id = $this->input->post('id');
		 $where = array('song_id' => $id);
		 $info = $this->GetModel->get_data_selected($this->song_table,$where);
		 $where1 = array('artist_id' => $info['artist_id']);
		 $artist = $this->GetModel->get_data_selected($this->artist_table,$where1);
		 $data = [];

		 $data = array(
		 	'song_title' => $info['song_title'],
		 	'song_id' => $info['song_id'],
		 	'lyrics' => $info['lyrics'],
		 	'artist_id' => $info['artist_id'],
		 	'artist_name' => $artist['artist_name'],
		 	'song_type' => $info['song_type'],
		 	'key_chords' => $info['key_c']
		 );


		 echo json_encode($data);
	}

	public function update_song(){

	$info = array(
			'song_title' => $this->input->post('update_song_title'),
			'artist_id' => $this->input->post('artist_id2'),
			'song_type' => $this->input->post('update_type'),
			'key_c' => $this->input->post('key_chords'),
	);
	$where = array(
			'song_id' => $this->input->post('son_id')
	);

	$update = $this->UpdateModel->update1($where,$info,$this->song_table);
	$params = array('cond' => $update, 'message' => 'Successfully Updated');
	$this->load->library('Condition', $params);
}


	public function add(){ 

		$info = array(
			'song_title' => $this->input->post('song_title'),
			'artist_id' => $this->input->post('artist_id'),
			// 'lyrics' => $this->input->post('lyrics'),
			// 'location' => $_POST['location'],
			'song_type' => $_POST['type'],
			'created' =>  date('Y-m-d H:i:s', time()));

		$result  = $this->AddModel->add($this->song_table,$info);

		$params = array('cond' => $result, 'message' => 'Successfully Added');
			$this->load->library('Condition', $params);

	}


public function search_song(){
	
}

	
}
