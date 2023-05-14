<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {

	function __construct() {

parent::__construct();
$this->load->model('Allstock');


}
	 
	public function index(){
		$data=array();
                $data['onecount'] = $this->Allstock->Opositive();
                $data['twocount'] = $this->Allstock->Onegetive();
                $data['threecount'] = $this->Allstock->Apositive();
                $data['fourcount'] = $this->Allstock->Anegetive();
                $data['fivecount'] = $this->Allstock->ABnegetive();
                $data['sixcount'] = $this->Allstock->Bpositive();
                $data['sevencount'] = $this->Allstock->Bnegetive();
                $data['eightcount'] = $this->Allstock->ABpositive();
				
				$data['results'] = $this->Allstock->copositive();
				$data['bloodtwo'] = $this->Allstock->conegetive();
				$data['bloodthree'] = $this->Allstock->capositive();
				$data['bloodfour'] = $this->Allstock->canegetive();
				$data['bloodfive'] = $this->Allstock->cbpositive();
				$data['bloodsix'] = $this->Allstock->cbnegetive();
				$data['bloodseven'] = $this->Allstock->cabpositive();
				$data['bloodeight'] = $this->Allstock->cabnegetive();
                
                
		$this->load->view('stock',$data);
	}
	
}
