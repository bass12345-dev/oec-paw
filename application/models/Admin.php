<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model
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

    public function validate($user_info)
    {
      $this->db->where($user_info);
      $query = $this->db->get('admin');
      return $query->num_rows();
    }


    /**
   *get all_admin_model
   * 
   */

     public function all_admin()
    {
        return $this->db->get('admin')->result_array();
    }



     /**
   * Get admin info model
   * 
   */

    public function get_user_info($user_info)
    {
        $this->db->from('admin');
        $this->db->where($user_info);
        return $this->db->get()->result_array();

    }

       /**
   *add_admin_model
   * 
   */

     public function add_admin($admin_info)
    {
        $this->db->insert('admin', $admin_info);
        return $this->db->affected_rows();
    }


     /**
   *delete_admin_model
   * 
   */

       public function delete_admin($admin_info)
    {
        $this->db->where($admin_info);
        $query = $this->db->delete('admin');
        return $this->db->affected_rows();
    }







    /**
   * -----------------------------------------------------------------------------------
   *  
   * DASHBOARD SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */

    /**
	 * Count Employees Model
	 * 
	 */

      public function number_of_employees()
    {
        return $this->db->get('employee_records')->num_rows();
    }


    /**
	 *Count Schedules Model
	 * 
	 */

      public function number_of_schedules()
    {
        return $this->db->get('employee_schedule')->num_rows();
    }


      /**
   *Count Schedules Model
   * 
   */

      public function number_of_schedules_pm()
    {
        return $this->db->get('employee_schedule_pm')->num_rows();
    }


    /**
	 *Count history logged Model
	 * 
	 */

      public function admin_logged()
    {
        return $this->db->get('history_log')->num_rows();
    }

    /**
	 *Count admin logged Model
	 * 
	 */

      public function number_of_admin()
    {
        return $this->db->get('admin')->num_rows();
    }



     /**
   * -----------------------------------------------------------------------------------
   *  
   * ATTENDANCE SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */



      /**
    get all_attendance_model
   * 
   */

     public function all_attendance()
    {
       

      $this->db->select('*')
      ->from('employee_attendance')
      ->join('employee_records','employee_records.emp_id=employee_attendance.employee_id','left');
      
       return $this->db->get()->result_array();

    }

       /**
   *delete_employee_model
   * 
   */
          public function delete_attendance($attendance_info)
    {
        $this->db->where($attendance_info);
        $query = $this->db->delete('employee_attendance');
        return $this->db->affected_rows();
    }

       /**
   *delete_employee_attendance_model
   * 
   */
          public function delete_employee_record($employee_info)
    {
        $this->db->where('employee_id',$employee_info['emp_id']);
        $query = $this->db->delete('employee_attendance');
        return $this->db->affected_rows();
    }

      /**
   *attendance_profile
   * 
   */
    public function attendance_profile($cash_info)
    {
        $this->db->from('employee_records');
       
        $this->db->where('employee_id', $cash_info['employee_id']);
        return $this->db->get()->result_array()[0];
    }


    /**
   *check_id_model
   * 
   */

     public function check_id_emp($employee_info)
    {
        $this->db->from('employee_records');
        $this->db->where('employee_id', $employee_info['employee_id']);
         return $this->db->get()->num_rows();
    }

      /**
   *add_attendance_model
   * 
   */

     public function add_attendance($attendance)
    {
        $this->db->insert('employee_attendance', $attendance);
        return $this->db->affected_rows();

    }

     /**
   *get employee data to edit
   * 
   */

      public function get_employee_attendance($id)
    {
         $this->db->from('employee_attendance');
        $this->db->where('id', $id);

        return $this->db->get()->result_array()[0];
    }

     /**
   *update attendance
   * 
   */

     public function update_attendance_info($attendance)
    {
        $this->db->where('id', $attendance['id']);
        $this->db->where('employee_id', $attendance['employee_id']);
      return $this->db->update('employee_attendance', $attendance);
    }


      public function all_sched()
      {
         $this->db->select('*')
      ->from('employee_records')
    
      ->join('employee_schedule','employee_schedule.id=employee_records.schedule_id','left')
      ->join('employee_schedule_pm','employee_schedule_pm.id=employee_records.schedule_pm','left');

       return $this->db->get()->result_array();
      }

       /**
   *check_attendance_model
   * 
   */

     public function check_attendance_today($attendance_today)
    {
        $this->db->from('employee_attendance');
        $this->db->where('employee_id', $attendance_today['employee_id']);
        $this->db->where('date_attendance', $attendance_today['date_attendance']);    
        return $this->db->get()->num_rows();
    }

    public function update_number_of_hours_am($number_of_hours_am)
    {
        $this->db->where('id', $number_of_hours_am['id']);
        return $this->db->update('employee_attendance', $number_of_hours_am);
    }

    public function update_number_of_hours_pm($number_of_hours_pm)
    {
        $this->db->where('id', $number_of_hours_pm['id']);
        return $this->db->update('employee_attendance', $number_of_hours_pm);
    }

    public function nbh_am($nbh_am)
    {
      $this->db->where('id',$nbh_am['id']);
      return $this->db->update('employee_attendance', $nbh_am);
    }

      public function nbh_pm($nbh_pm)
    {
      $this->db->where('id',$nbh_pm['id']);
      return $this->db->update('employee_attendance', $nbh_pm);
    }

      public function nbh_am_0($a_0)
    {
      $this->db->where('id',$a_0['id']);
      return $this->db->update('employee_attendance', $a_0);
    }


      public function nbh_pm_0($p_0)
    {
      $this->db->where('id',$p_0['id']);
      return $this->db->update('employee_attendance', $p_0);
    }



      public function add_total_hours($total)
    {
      $this->db->where('id',$total['id']);
      return $this->db->update('employee_attendance', $total);
    }




    public function employee_profile_attendance($attendance_today){

       $this->db->select('*')
      ->from('employee_records')
      ->join('employee_position','employee_position.id=employee_records.position_id','left')
      ->join('employee_category','employee_category.id=employee_records.department_id','left')
      ->join('employee_schedule','employee_schedule.id=employee_records.schedule_id','left')
      ->join('employee_schedule_pm','employee_schedule_pm.id=employee_records.schedule_pm','left');
        $this->db->where('employee_records.emp_id', $attendance_today['employee_id']);
        return $this->db->get()->result_array()[0];


    }

     public function get_id_attendance($attendance_today){

        $this->db->from('employee_attendance');     
        $this->db->where('date_attendance', $attendance_today['date_attendance']);
        return $this->db->get()->result_array()[0];


    }

    public function get_id_attendance_arr($attendance_today_arr){

        $this->db->from('employee_attendance');     
        $this->db->where('id', $attendance_today_arr['id']);
        return $this->db->get()->result_array()[0];


    }


    public function total_arr($total_arr){

        $this->db->from('employee_attendance');     
        $this->db->where('id', $total_arr['id']);
        return $this->db->get()->result_array()[0];


    }









     /**
   * -----------------------------------------------------------------------------------
   *  
   * EMPLOYEE SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */




      /**
   *get all_employee_model
   * 
   */

     public function all_employee()
    {
       

      $this->db->select('*')
      ->from('employee_records')
      ->join('employee_position','employee_position.id=employee_records.position_id','left')
      ->join('employee_category','employee_category.id=employee_records.department_id','left')
      ->join('employee_schedule','employee_schedule.id=employee_records.schedule_id','left')
      ->join('employee_schedule_pm','employee_schedule_pm.id=employee_records.schedule_pm','left')
       ->join('employee_cashadvance','employee_cashadvance.employee_id=employee_records.emp_id','left')
      ;


       return $this->db->get()->result_array();

    }


   
     public function all_employees()
    {
        return $this->db->get('employee_records')->result_array();
         
    }
    /**
   *search all_employee_model
   * 
   */


    public function search_employee_id($data)
    {
        $this->db->like('employee_id', $data);
        $this->db->or_like('name', $data);    
        return $this->db->get('employee_records')->result_array();
    }


    /**
   *add_employee_model
   * 
   */

     public function add_employee($employee_info)
    {
        $this->db->insert('employee_records', $employee_info);
        return $this->db->affected_rows();
    }

   

      /**
   *delete_employee_model
   * 
   */
          public function delete_employee($employee_info)
    {
        $this->db->where($employee_info);
        $query = $this->db->delete('employee_records');
        return $this->db->affected_rows();
    }

      /**
   *get employee data to edit
   * 
   */

      public function get_employee($id)
    {
        $this->db->where('emp_id', $id);
        return $this->db->get('employee_records')->result_array()[0];
    }


      /**
   *update employee
   * 
   */

     public function update_employee($employee_info)
    {
        $this->db->where('emp_id', $employee_info['emp_id']);
        return $this->db->update('employee_records', $employee_info);
    }

       /**
   *view employee
   * 
   */

     public function employee_profile($id)
    {

       $this->db->select('*')
      ->from('employee_records')
      ->join('employee_position','employee_position.id=employee_records.position_id','left')
      ->join('employee_category','employee_category.id=employee_records.department_id','left')
      ->join('employee_schedule','employee_schedule.id=employee_records.schedule_id','left')
      ->join('employee_schedule_pm','employee_schedule_pm.id=employee_records.schedule_pm','left');
        $this->db->where('employee_records.emp_id', $id);
        return $this->db->get()->result_array()[0];
    }



    /**
   * -----------------------------------------------------------------------------------
   *  
   * POSITION SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */



    /**
	 *get all_position_model
	 * 
	 */

     public function all_position()
    {
        return $this->db->get('employee_position')->result_array();
    }
    


    /**
	 *add_position_model
	 * 
	 */

     public function add_position($position_info)
    {
        $this->db->insert('employee_position', $position_info);
        return $this->db->affected_rows();
    }
    
     

     /**
	 *delete_position_model
	 * 
	 */

       public function delete_position($position_info)
    {
        // $this->db->where($position_info);
        $this->db->where('id', $position_info['id']);
        $query = $this->db->delete('employee_position');
        return $this->db->affected_rows();
    }

  

      /**
	 *get position
	 * 
	 */

      public function get_position($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('employee_position')->result_array()[0];
    }

      /**
	 *update position
	 * 
	 */

     public function update_position($position_info)
    {
        $this->db->where('id', $position_info['id']);
        return $this->db->update('employee_position', $position_info);
    }

    /**
   *view position
   * 
   */

    public function position_profile($id)
    {
        $this->db->from('employee_position,employee_category');
        $this->db->where('employee_category.id = employee_position.dep_id');
       /* $this->db->where('residence_household.resident_id = resident.resident_id');
        $this->db->where('household.purok_id = purok.purok_id');*/
        $this->db->where('employee_position.id', $id);
        return $this->db->get()->result_array()[0];
    }

    /**
   *check_position_model
   * 
   */

     public function check_position($position_info)
    {
        $this->db->from('employee_records');
        $this->db->where('position_id', $position_info['position_id']);
          return $this->db->get()->num_rows();
    }


    /**
   * -----------------------------------------------------------------------------------
   *  
   * DEPARTMENT SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */



      /**
	 *get all_department_model
	 * 
	 */

      public function all_department()
    {
        return $this->db->get('employee_category')->result_array();
    }

    /**
   *add_department_model
   * 
   */

     public function add_department($department_info)
    {
        $this->db->insert('employee_category', $department_info);
        return $this->db->affected_rows();
    }



     /**
   *delete_department_model
   * 
   */

       public function delete_department($department_info)
    {
        $this->db->where($department_info);
        $query = $this->db->delete('employee_category');
        return $this->db->affected_rows();
    }


    /**
   *edit_department_model
   * 
   */
        public function get_department($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('employee_category')->result_array()[0];
    }

     /**
   *update department
   * 
   */

     public function update_department($department_info)
    {
        $this->db->where('id', $department_info['id']);
        return $this->db->update('employee_category', $department_info);
    }


    /**
   *view_department_model
   * 
   */
    public function department_profile($id)
    {
        $this->db->from('employee_category');
       
        $this->db->where('employee_category.id', $id);
        return $this->db->get()->result_array()[0];
    }



    /**
   * -----------------------------------------------------------------------------------
   *  
   * CASHADVANCE SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */



    public function add_cashadvance($cash)
    {
        $this->db->insert('employee_cashadvance', $cash);
        return $this->db->affected_rows();
    }

    /**
   *edit_cashadvance_model
   * 
   */
        public function get_cashadvance($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('employee_cashadvance')->result_array()[0];
    }
      /**
   *update cashadvance
   * 
   */

     public function update_cashadvance($cashadvance_info)
    {
        $this->db->where('id', $cashadvance_info['id']);
        return $this->db->update('employee_cashadvance', $cashadvance_info);
    }


    /**
   * cashadvance table
   * 
   */

    public function all_cashadvance()
    {
      $this->db->select('*');
      $this->db->from('employee_cashadvance');
      $this->db->join('employee_records','employee_records.emp_id=employee_cashadvance.employee_id','left');
      return $this->db->get()->result_array();

    }


    /**
   *add_cashadvance_model
   * 
   */

     public function check_id($cash_info)
    {
        $this->db->from('employee_records');
        $this->db->where('employee_id', $cash_info['employee_id']);
         return $this->db->get()->num_rows();
    }

     /**
   *cashadvance_profile
   * 
   */

  




    public function emp_profile($employee_info)
    {
        $this->db->from('employee_records');
       
        $this->db->where('employee_id', $employee_info['employee_id']);
        return $this->db->get()->result_array()[0];
    }


     /**
   *view_cash_model
   * 
   */
    public function cash_profile($id)
    {
        $this->db->from('employee_cashadvance');
        $this->db->join('employee_records', 'employee_records.emp_id = employee_cashadvance.employee_id','left');
       
        $this->db->where('employee_cashadvance.id', $id);
        return $this->db->get()->result_array()[0];
    }

    /**
   *delete_deduction_model
   * 
   */

       public function delete_cash($delete_cash)
    {
        $this->db->where($delete_cash);
        $query = $this->db->delete('employee_cashadvance');
        return $this->db->affected_rows();
    }


     /**
   * -----------------------------------------------------------------------------------
   *  
   * DEDUCTION SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */

     /**
   *get all_deduction_model
   * 
   */

      public function all_deduction()
    {
        return $this->db->get('employee_deduction')->result_array();
    }


      /**
   *add_deduction_model
   * 
   */

     public function add_deduction($deduction_info)
    {
        $this->db->insert('employee_deduction', $deduction_info);
        return $this->db->affected_rows();
    }

     /**
   *get deduction
   * 
   */

      public function get_deduction($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('employee_deduction')->result_array()[0];
    }
      /**
   *update deduction
   * 
   */

     public function update_deduction($deduction_info)
    {
        $this->db->where('id', $deduction_info['id']);
        return $this->db->update('employee_deduction', $deduction_info);
    }


      /**
   *delete_deduction_model
   * 
   */

       public function delete_deduction($deduction_info)
    {
        $this->db->where($deduction_info);
        $query = $this->db->delete('employee_deduction');
        return $this->db->affected_rows();
    }

      
      /**
   *view_deduction_model
   * 
   */
    public function deduction_profile($id)
    {
        $this->db->from('employee_deduction');
       
        $this->db->where('employee_deduction.id', $id);
        return $this->db->get()->result_array()[0];
    }



     /**
   * -----------------------------------------------------------------------------------
   *  
   * SCHEDULE SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */


      public function all_schedule_am()
    {
        return $this->db->get('employee_schedule')->result_array();
    }

      public function all_schedule_pm()
    {
        return $this->db->get('employee_schedule_pm')->result_array();
    }


     /**
   *add_morning_model
   * 
   */

     public function add_morning($am_info)
    {
        $this->db->insert('employee_schedule', $am_info);
        return $this->db->affected_rows();
    }


      /**
   *get morning
   * 
   */

      public function get_morning($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('employee_schedule')->result_array()[0];
    }
     /**
   *update morning
   * 
   */

     public function update_morning($am_info)
    {
        $this->db->where('id', $am_info['id']);
        return $this->db->update('employee_schedule', $am_info);
    }

     /**
   *delete_position_model
   * 
   */

       public function delete_am($am_info)
    {
        $this->db->where($am_info);
        $query = $this->db->delete('employee_schedule');
        return $this->db->affected_rows();
    }

     /**
   *add_afternoon_model
   * 
   */

     public function add_afternoon($pm_info)
    {
        $this->db->insert('employee_schedule_pm', $pm_info);
        return $this->db->affected_rows();
    }

       /**
   *get afternoon
   * 
   */

      public function get_afternoon($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('employee_schedule_pm')->result_array()[0];
    }

    /**
   *update afternoon
   * 
   */

     public function update_afternoon($pm_info)
    {
        $this->db->where('id', $pm_info['id']);
        return $this->db->update('employee_schedule_pm', $pm_info);
    }


     /**
   *delete_afternoon_model
   * 
   */

       public function delete_pm($pm_info)
    {
        $this->db->where($pm_info);
        $query = $this->db->delete('employee_schedule_pm');
        return $this->db->affected_rows();
    }
    /**
   *schedule morning
   * 
   */
    public function sched_id($sched_id)
    {
        $this->db->from('employee_schedule');     
        $this->db->where('id', $sched_id['schedule_id']);
        return $this->db->get()->result_array()[0];
    }
       /**
   *schedule afternoon
   * 
   */
    public function sched_id_pm($sched_id)
    {
        $this->db->from('employee_schedule_pm');      
        $this->db->where('id', $sched_id['schedule_pm']);
        return $this->db->get()->result_array()[0];
    }


     /**
   * -----------------------------------------------------------------------------------
   *  
   * PAYROLL SECTION MODEL
   * 
   * -----------------------------------------------------------------------------------
   */
      public function sum_deduction()
    {

      $this->db->select_sum('amount' );      
      $this->db->from('employee_deduction');
      $amount =$this->db->get()->result_array()[0]['amount'];

      
            return $amount;
       
      
    }

    //    public function total_hours($from,$to)
    // {

    //   $this->db->select_sum('number_of_hour' );     

    //   $this->db->from('employee_attendance')

    //   ->join('employee_records','employee_records.emp_id=employee_attendance.employee_id','left')
    //   ->join('employee_position','employee_position.id=employee_records.position_id','left');

    //   $this->db->where('date_attendance BETWEEN "'.$from.'" and "'. $to.'"');
    //   $this->db->group_by('employee_attendance.employee_id');
    //   $this->db->order_by('employee_records.name ASC');

    //      return $this->db->get()->result_array();


    //   // $total_hr =$this->db->get()->result_array()[0]['number_of_hour'];

    //   // return $total_hr;
    //    ;


      
    // }


      public function get_user($admin_id)
      {
        $this->db->where('id', $admin_id['id']);
          return $this->db->get('admin')->result_array()[0];     
      }











	function fetch_data_employee()
	{
	$query = $this->db->query('SELECT *, employee_records.emp_id AS emp_id FROM employee_records LEFT JOIN employee_position ON employee_position.id=employee_records.position_id LEFT JOIN employee_schedule ON employee_schedule.id=employee_records.schedule_id LEFT JOIN employee_category ON employee_category.id=employee_records.department_id LEFT JOIN employee_schedule_pm ON employee_schedule_pm.id=employee_records.schedule_pm ORDER BY emp_id desc');
	return $query;
		/*$this->db->select('*');
		$this->db->from('employee_records');
		$this->db->join('employee_schedule','employee_schedule.id = employee_records.schedule_id');
		$this->db->join('employee_schedule_pm','employee_schedule_pm.id = employee_records.schedule_pm');
		$this->db->join('employee_position','employee_position.id=employee_records.position_id');
		$this->db->join('employee_category','employee_category.id=employee_records.department_id');
		
		$query = $this->db->get();
		return $query;*/
	}
	function fetch_attendance()
	{
		$query = $this->db->query('SELECT *, employee_records.employee_id AS emp_id, employee_attendance.id AS attend FROM employee_attendance LEFT JOIN employee_records ON employee_records.emp_id=employee_attendance.employee_id LEFT JOIN employee_category ON employee_category.id=employee_records.department_id LEFT JOIN employee_position ON employee_position.id=employee_records.position_id ORDER BY employee_attendance.date_attendance DESC, employee_attendance.time_in DESC, employee_attendance.time_in_PM DESC');
			return $query;
		/*$this->db->select('*','employee_records.employee_id AS emp_id, employee_attendance.id as attend');
		$this->db->from('employee_attendance');
		$this->db->join('employee_records','employee_records.emp_id=employee_attendance.employee_id');
		$this->db->join('employee_category','employee_category.id=employee_records.department_id');
		$this->db->join('employee_position','employee_position.id=employee_records.position_id');
		$query = $this->db->get();
		return $query;*/
	}

	function fetch_schedule()
	{
		/*$this->db->select('*');
		$this->db->from('employee_schedule');
		
		$query = $this->db->get();
		return $query;*/
		$query = $this->db->query("SELECT * FROM employee_schedule ORDER BY id desc");
		return $query;
	}

	function fetch_schedule_pm()
	{
		/*$this->db->select('*');
		$this->db->from('employee_schedule_pm'); 	
		$query = $this->db->get();
		return $query;*/

		$query = $this->db->query("SELECT * FROM employee_schedule_pm ORDER BY id desc");
		return $query;
	}

	function fetch_cash_advance()
	{
		$query = $this->db->query("SELECT *, employee_cashadvance.id AS cashid, employee_records.employee_id AS emp_id FROM employee_cashadvance LEFT JOIN employee_records ON employee_records.emp_id=employee_cashadvance.employee_id ORDER BY employee_cashadvance.date_created DESC");
		return $query;
	}
}
	




?>