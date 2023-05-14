<?php
class Register extends CI_Model{
	
	public function create($img_url){
		if($img_url==''){
			$img_url='assets/images/default_avatar.png';
} 

$insert_data=array(

'full_name'=>$this->input->post('full_name'),
'user_name'=>$this->input->post('user_name'),
'mobile_no' => $this->input->post('mobile_no'),
'password' => md5($this->input->post('password')),	
'address' => $this->input->post('address'),
'weight' => $this->input->post('weight'),
'blood_group' => $this->input->post('blood_group'),
'area' => $this->input->post('area'),
'l_date' => $this->input->post('l_date'),
'donate_count' => $this->input->post('donate_count'),
'gender' => $this->input->post('gender'),
'image' => $img_url );


$status=$this->db->insert('reg_doner',$insert_data);
return($status==true ?true :false);
}
    
    

}
?>