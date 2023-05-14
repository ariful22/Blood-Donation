<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model{
    function __construct() {
        $this->userTbl = 'reg_doner';
    }
    /*
     * get rows from the users table
     */
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
			foreach ($params['conditions'] as $key => $value) {
				$this->db->where($key,$value);
			}
		}
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
			$query = $this->db->get();
			$result = $query->row_array();
        }else{
            
            $query = $this->db->get();
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$result = ($query->num_rows() > 0)?$query->row_array():FALSE;
			}else{
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
            }
        }

        //return fetched data
        return $result;
    }
    
    public function get_users($id = FALSE){
			

			$query = $this->db->get_where('reg_doner', array('id' => $id));
			return $query->row_array();
		}
    
    public function update_profile($imgUrl){

			if($imgUrl == "") {
			$data = array(
				
				'full_name' => $this->input->post('full_name'),
				'mobile_no' => $this->input->post('mobile_no'),
				'address'=> $this->input->post('address'),
				'weight' => $this->input->post('weight'),
				'l_date' => $this->input->post('l_date'),
				'donate_count' => $this->input->post('donate_count'),
				'blood_group' => $this->input->post('blood_group')
				);
			}else{
				$data = array(
				
				'full_name' => $this->input->post('full_name'),
				'mobile_no' => $this->input->post('mobile_no'),
				'address'=> $this->input->post('address'),
				'weight' => $this->input->post('weight'),
				'l_date' => $this->input->post('l_date'),
				'donate_count' => $this->input->post('donate_count'),
				'blood_group' => $this->input->post('blood_group'),
				'image' 	=> $imgUrl
				);
			}

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('reg_doner', $data);

		}
		
		/*
	*-----------------------------------
	* update the user's photo
	*-----------------------------------
	*/
	public function updatePhoto($imgUrl)
	{
		if($imgUrl == '') {
			$imgUrl = 'assets/images/default_avatar.png';
		}
			$update_data = array(
				'image' 	=> $imgUrl
			);

			$this->db->where('id', $this->input->post('id'));
			return $this->db->update('reg_doner', $update_data);
					
	}
		
		
		/*
	Change password for the employee
	*/
	public function change_password($employee_data, $employee_id = FALSE)
	{
		$success = FALSE;

		//Run these queries as a transaction, we want to make sure we do all or nothing
		$this->db->trans_start();

		$this->db->where('id', $employee_id);
		$success = $this->db->update('reg_doner', $employee_data);

		$this->db->trans_complete();

		$success &= $this->db->trans_status();

		return $success;
	}
	
	public function get_info($employee_id)
	{
		$this->db->from('reg_doner');	
		$this->db->where('reg_doner.id', $employee_id);
		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return $query->row();
		}
		else
		{
			
		}
	}
	
	public function check_password($username, $password)
	{
		$query = $this->db->get_where('reg_doner', array('username' => $username),1);

		if($query->num_rows() == 1)
		{
			$row = $query->row();

			// compare passwords
			if(md5($password, $row->password))
			{
				return TRUE;
			}

		}

		return FALSE;
	}

}
