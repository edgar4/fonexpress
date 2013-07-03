<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller {
	public function index(){
		$this->load->model('forum_model');
		$data['rows'] = $this->forum_model->forum();
		$this->load->view('forum_view',$data);
	}
	
}
