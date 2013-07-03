<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
	public function index(){
		$this->load->model('product_model');
		$data['rows'] = $this->product_model->about();
		$this->load->view('product_view',$data);
	}
	
	public function nokia(){
		
		$this->load->view('nokia_view');
	}
	public function blackberry(){
		
		$this->load->view('blackberry_view');
	}
	public function hp(){
		
		$this->load->view('hp_view');
	}
	public function another(){
		
		$this->load->view(' hp_view');
	}
	public function alcatel(){
		
		$this->load->view('alcatel_view');
	}
	
	public function apple(){
		
		$this->load->view('apple_view');
	}
		public function camera(){
		
		$this->load->view('camera_view');
	}
		public function tablet(){
		
		$this->load->view('tablet_view');
	}
		public function samsung(){
		
		$this->load->view('samsung_view');
		// categories
	}public function smartphone(){
		
		$this->load->view('smartphones_view');
	}
	public function accessories(){
		
		$this->load->view('accessories_view');
	}
	public function basicphones(){
		
		$this->load->view('basicphones_view');
	}
	public function printers(){
		
		$this->load->view('printers_view');
		
	}
	public function featurephones(){
		
		$this->load->view('featurephones_view');
	}
	public function mifone(){
		
		$this->load->view('mifone_view');
	}
		public function latest(){
		
		$this->load->view('latest_view');
	}
		public function lg(){
		
		$this->load->view('lg_view');
	}
	

	
}
