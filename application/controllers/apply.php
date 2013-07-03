<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apply extends CI_Controller {
	

	public function index()

	{
		 $this->load->model('gallery_model');
		if($this->input->post('upload')){
			
			$this->gallery_model->do_upload();
		}
		$this->load->view('gallery');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */