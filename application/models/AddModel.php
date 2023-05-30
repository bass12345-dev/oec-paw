<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AddModel extends CI_Model
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
   * Login Model
   * 
   */

    public function add($table,$data)
    {
      $this->db->insert($table, $data);
      return $this->db->affected_rows();
    }


}

?>