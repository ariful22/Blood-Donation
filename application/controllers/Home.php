<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	 
	public function index()
	{
		$data=array();
		$data['members'] = $this->Register->get_members();
		$data['available_members'] = $this->Register->get_available_members();
		$this->load->view('home',$data);
	}
	
	
	public function create(){
		$this->form_validation->set_rules('mobile_no','Mobile No','required');
		
		if($this->form_validation->run()==true)
		{
			$imgUrl=$this->uploadImage();
			$create=$this->Register->create($imgUrl);
			
			if($create){
					echo "<script>alert('Thanks for Registering with us')</script>";
				echo"<script>window.open('http://localhost/p400',
				'_self')</script>";
				}else{
                    echo"<script>alert('error please try again')</script>";
				echo"<script>window.open('http://localhost/p400',
				'_self')</script>";
                }
	}
    
    
    
    
    }
	
	
	public function uploadImage(){
		$type = explode('.', $_FILES['image']['name']);				
		$type = $type[count($type)-1];		
		$url = 'assets/images/'.uniqid(rand()).'.'.$type;
		if(in_array($type, array('gif', 'jpg', 'jpeg', 'png', 'JPG', 'GIF', 'JPEG', 'PNG'))) {
			if(is_uploaded_file($_FILES['image']['tmp_name'])) {			
				if(move_uploaded_file($_FILES['image']['tmp_name'], $url)) {
					return $url;
				}	else {
					return false;
				}			
			}
		} 
		}
		
		public function searchdata(){
			$blood_group =$this->input->post('blood_group');
			$area =$this->input->post('area');
			$data['results']= $this->Register->search($blood_group,$area);
			if($data){
				$this->load->view('search',$data);
			}
			else{
				echo 'not found';
			}
			
			
		
		}

		public  function detailview(){
			$id = $this->input->get('id');
			$data['row'] = $this->Register->get_details($id);
			$this->load->view('details',$data);
		}
}
    
   
            
			
			
			

