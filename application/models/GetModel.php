<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class GetModel extends CI_Model
{
	


    public function __construct()
    {
        parent::__construct();
    }

    /**
   * -----------------------------------------------------------------------------------
   *  
   * LOGIN SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */




  /**
   * Tables
   * 
   */

    public function get($table,$order_by,$order_key)
    {
      $this->db->from($table);
      $this->db->order_by($order_key,$order_by);
      return $this->db->get()->result_array();
    }

    public function get1($tables,$where,$order_by,$order_key){

      $this->db->from($tables);
      $this->db->where($where);
      $this->db->order_by($order_key,$order_by);
      return $this->db->get()->result_array();

    }


      public function get1limit($tables,$where,$order_by,$order_key){

      $this->db->from($tables);
      $this->db->where($where);
     
      $this->db->order_by('songs.created','desc');
      $this->db->limit(25);
      return $this->db->get()->result_array();


    }

        public function get2($tables,$where,$order_by,$order_key){

      $this->db->from($tables);
      $this->db->where($where);
      $this->db->join('songs','singer_songs.so_id = songs.song_id');
       $this->db->join('artist','artist.artist_id = songs.artist_id');
      $this->db->order_by('songs.song_title');
      return $this->db->get()->result_array();

    }



       public function get3($tables,$order_by,$order_key){

      $this->db->from($tables);
      $this->db->where('position','singer');
      $this->db->order_by('full_name');
      return $this->db->get()->result_array();

    }



            public function get4($tables,$where1,$where2,$where3,$order_by,$order_key){

      $this->db->from('singer_songs,songs');
     
      // $this->db->join('songs','singer_songs.so_id = songs.song_id');
       $this->db->join('artist','artist.artist_id = songs.artist_id');
        $this->db->where($where1);
        $this->db->where($where2);
        $this->db->where($where3);
         // $this->db->where('songs.song_type= "upbeat"');
      $this->db->order_by('songs.song_title');
      return $this->db->get()->result_array();

    }


    public function get5($tables,$where1,$where2,$where3,$order_by,$order_key,$limit){

      $this->db->from('singer_songs,songs');
     
      // $this->db->join('songs','singer_songs.so_id = songs.song_id');
       $this->db->join('artist','artist.artist_id = songs.artist_id');
        $this->db->where($where1);
        $this->db->where($where2);
        $this->db->where($where3);
         // $this->db->where('songs.song_type= "upbeat"');
      $this->db->order_by('songs.song_title', 'RANDOM');
      $this->db->limit($limit);
      return $this->db->get()->result_array();

    }


        public function get6($tables,$where1,$where2,$order_by,$order_key,$limit){

      $this->db->from('singer_songs,songs');
       $this->db->join('artist','artist.artist_id = songs.artist_id');
        $this->db->where($where1);
        $this->db->where($where2);
      $this->db->order_by('songs.song_title', 'RANDOM');
      $this->db->limit($limit);
      return $this->db->get()->result_array();

    }

    public function get8(){

       $this->db->from('posts,members');
      $this->db->where('posts.member_id = members.member_id');
      return $this->db->get()->result_array();
    }


      public function get9($tables,$order_by,$order_key){

      $this->db->from($tables);
      $this->db->where('position != "singer"');
      $this->db->where('position != "type"');
      $this->db->order_by('full_name');
      return $this->db->get()->result_array();

    }



       public function get_with_join_gigs1($tables,$order_by,$order_key){

      $this->db->from($tables);
     $this->db->join('members','members.member_id = gigs.m_id');
      // $this->db->join('setlists','setlists.g_id = gigs._id');
      $this->db->order_by('gigs.created',$order_by);
      return $this->db->get()->result_array();

    }



    public function get_upcoming_gig1($tables,$order_by,$order_key){

       $this->db->from($tables);
        $this->db->where('gigs.created > "2023-1-25"');
        $this->db->where('gigs.income_w  = "0"');
        $this->db->order_by('gigs.created',$order_by);
      return $this->db->get()->result_array();

    }


    public function get_todo($table,$order_by,$order_key)
    {
      $this->db->from($table);
        $this->db->where('todo.if_done  = "0"');
      $this->db->order_by($order_key,$order_by);
      return $this->db->get()->result_array();
    }



      public function get_money_logs($table,$order_by,$order_key)
    {
      $this->db->from($table);
         $this->db->where('income.total_income  != "0"');
      $this->db->order_by('income.income_id','desc');
      return $this->db->get()->result_array();
    }


       public function get_with_join_admin1($tables,$order_by,$order_key){

      $this->db->from($tables);
     $this->db->join('members','members.member_id = admin.member_id');
      $this->db->order_by('admin.created',$order_by);
      return $this->db->get()->result_array();

    }


          public function get_with_join_songs1($tables,$where,$order_by,$order_key){

      $this->db->from($tables);
     $this->db->join('artist','artist.artist_id = songs.artist_id');
     $this->db->where($where);
      $this->db->order_by('songs.song_title');
      return $this->db->get()->result_array();

    }






  // Get Item

    public function get_data_selected($table,$where)
    {
      $this->db->where($where);
        return $this->db->get($table)->result_array()[0];
    }

    public function get_last_data_income($table,$order_by,$order_key){


            
             $this->db->order_by($order_key,$order_by);
        return $this->db->get($table)->result_array()[0];


    }

       public function get_data_selected1($table,$where1,$where2)
    {
      $this->db->where($where1);
      $this->db->where($where2);
        return $this->db->get($table)->result_array();
    }


    public function get_setlist_songs($gig_id,$i){

        $this->db->from('setlists');
       $this->db->join('members','members.member_id = setlists.singe_id');
       $this->db->join('songs','songs.song_id = setlists.son_id');
        $this->db->where('set_number',$i);
       $this->db->where('g_id',$gig_id);
      // $this->db->order_by('setlists.setlist_id', 'desc');
      // $this->db->order_by('setlists.set_number', 'desc');
      return $this->db->get()->result_array();

    }


}

?>