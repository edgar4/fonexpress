<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index(){
		$this->load->model('blog_model');
		$data['rows'] = $this->blog_model->blog();
		$this->load->view('blog_view',$data);
	}
	
}
