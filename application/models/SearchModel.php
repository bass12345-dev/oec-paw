<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model
{
	


    public function __construct()
    {
        parent::__construct();
    }

    //search artist

  public function search_artist($data)
    {
        $this->db->like('artist_name', $data);
        return $this->db->get('artist')->result_array();
    }


  public function search_member($data)
    {
        $this->db->like('full_name', $data);
        return $this->db->get('members')->result_array();
    }


  public function search_singers($data)
    {
        $this->db->like('full_name', $data);
        $this->db->where('position = "singer"');
        return $this->db->get('members')->result_array();
    }


}

?>