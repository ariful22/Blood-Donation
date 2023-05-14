<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Allmember extends CI_Controller{
	function __construct() {

parent::__construct();


}
	public function index(){
		$data=array();
		$data['results']    =   $this->Register->get_all_member();
		$this->load->view('memberlist',$data);
	}
	
	
	
}