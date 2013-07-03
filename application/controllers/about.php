<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {
	public function index(){
		$this->load->model('about_model');
		$data['rows'] = $this->about_model->about();
		$this->load->view('about_view',$data);
	}
	
	public function milk(){
		
		echo "yea this is milk";
	}
	
}
