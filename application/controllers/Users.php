<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('user');
    }
	
	
	 /*
     * User login
     */
    public function login(){
        $data = array();
        
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'username'=>$this->input->post('username'),
                    'password' => md5($this->input->post('password'))
                );
                $checkLogin = $this->user->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
                    redirect('users/account/');
                }else{
                    $data['error_msg'] = 'Wrong User or Password, please try again.';
                }
            }
        }
        //load the view
        $this->load->view('users/login', $data);
    }
    
	
	
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->user->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('users/account', $data);
        }else{
            redirect('users/login');
        }
    }
    
   
    public function edit($id){
		
		$data['user'] = $this->user->get_users($id);
		
		
		$this->load->view('users/useredit', $data);
	}

	public function update(){
		
		$imgUrl = $this->editUploadImage();
		$this->user->update_profile($imgUrl);
		redirect('users/account');
	}
	
	public function updateimg(){
		
		
		$this->load->view('users/changeimage');
	}
    
	/*
	*------------------------------------
	* edit the user's photo
	*------------------------------------
	*/
	public function updatePhoto()
	{
		
		
			$imgUrl = $this->editUploadImage();
			$update= $this->user->updatePhoto($imgUrl);
			if($update){
				redirect('users/account');
			}
			else {
				echo 'not found';
			}
		
			
		
		
	}
    
    /*
	*------------------------------------
	* returns the edited image url 
	*------------------------------------
	*/
	public function editUploadImage() 
	{
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
	
	public function changepassword($employee_id = -1){
    if($this->input->post('current_password') != '')
		{
			if($this->user->check_password($this->input->post('username'), $this->input->post('password')))
			{
				$employee_data = array(
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
				);

				if($this->user->change_password($employee_data, $employee_id))
				{
					
					$this->session->set_flashdata('msg', 'Password successfully changed');
    redirect('users/account');
					
				}
				else//failure
				{
					echo json_encode(array('success' => FALSE, 'message' => 'employees_unsuccessful_change_password', 'id' => -1));
				}
			}
			else
			{
				echo json_encode(array('success' => FALSE, 'message' => 'employees_current_password_invalid', 'id' => -1));
			}
		}
		else
			{
				echo json_encode(array('success' => FALSE, 'message' => 'employees_current_password_invalid', 'id' => -1));
			}
			
		
}
    
	public function change_password($employee_id = -1)
	{
		$person_info = $this->user->get_info($employee_id);
		
		$data['person_info'] = $person_info;

		$this->load->view('users/vChangePassword', $data);
	}
	
		

    /*
     * User logout
     */
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        redirect('users/login/');
    }
    
    
}