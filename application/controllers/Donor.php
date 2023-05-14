<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donor extends CI_Controller {

	
	 
	public function index()
	{
		$data['results'] = $this->Register->topdonor();
		$this->load->view('donor',$data);
	}
	
	
}

