<?php
class Register extends CI_Model{
	
	 public function create($img_url) {
		if($img_url == '') {
			$img_url = 'assets/images/default_avatar.png';
		} 
		
	 $insert_data = array(
	 
		'full_name' => $this->input->post('full_name'),
		'mobile_no' => $this->input->post('mobile_no'),
		'username' => $this->input->post('username'),
		'password' => md5($this->input->post("password")),	
		'address' => $this->input->post('address'),
		'weight' => $this->input->post('weight'),
		'blood_group' => $this->input->post('blood_group'),
		'area' => $this->input->post('area'),
		'l_date' => $this->input->post('l_date'),
		'donate_count' => $this->input->post('donate_count'),
		'gender' => $this->input->post('gender'),
		'image' => $img_url
	 
	 );
	 
	 $status = $this->db->insert('reg_doner', $insert_data);
	 return ($status == true ? true : false);
		
	}
	
	public  function search($blood_group,$area){
		$this->db->where("blood_group LIKE '$blood_group%' AND area LIKE '$area%'");
		$query= $this->db->get('reg_doner');
		return $query->result();
	}
	
	
	
	public function get_details($id){
		$this->db->WHERE('id',$id);
		$result = $this->db->get('reg_doner');
		return $result->row();
		
	}
	
	
	
	public function get_members(){
		$result = $this->db->get('reg_doner');
		return $result->result();
	
	}
	
	public function get_available_members(){
		
		$query=$this->db->query("SELECT * FROM reg_doner WHERE DATE_SUB(CURDATE(),INTERVAL 120 DAY)>=l_date");
		return $query;
	
	}
	
	public function topdonor(){
		
		$this->db->select('*');
		$this->db->where('DATE_SUB(CURDATE(),INTERVAL 120 DAY)>=l_date');
		
		$this->db->order_by('donate_count', 'DESC');
		$this->db->limit(9);
		$query = $this->db->get('reg_doner');
		return $query->result();
		
		
	
	}
	
	
	public function get_all_member(){
			$this->db->select('*');
			$this->db->order_by('id', 'DESC');
			
			$query = $this->db->get('reg_doner'); 
			return $query->result();
		}
	

	
  
	
	
	

}
?>