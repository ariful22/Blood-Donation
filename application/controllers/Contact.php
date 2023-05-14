<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	
	 
	public function index()
	{
		$this->load->view('contact');
	}
	
	public function sendmail(){

		$this->email->from($this->input->post('email'));
		$this->input->post('name');
		$this->input->post('phone');
		$this->input->post('subject');
		$this->email->to('tasnimjuhee1@gmail.com');
		$this->email->subject('Blood Donattion Realted mail');
		$this->email->message($this->input->post('message'));

		if( $this->email->send()){
		$this->session->set_flashdata('success', 'Thanks for the email query');
			redirect('contact');
		} else {
			echo $this->email->print_debugger();
		}
		
	}
}
