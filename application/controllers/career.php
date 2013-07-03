<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller {
	public function index(){
		$this->load->model('career_model');
		$data['rows'] = $this->career_model->career();
		$this->load->view('career_view',$data);
	}
	public function application(){
		
		$this->load->view('apply_view');
		
	}
	public function upload(){
		
	
		 $this->load->model('gallery_model');
		if($this->input->post('upload')){
			
			$this->gallery_model->do_upload();
			
				$this->load->library('form_validation');
	// validation
	$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email andress','trim|required|valid_email' );
		
		//if validation ==true
		if($this->form_validation->run()==false){
		}else{
			$name = $this->input->post('Field22');
			$email = $this->input->post('Field13');
			$subject = $this->input->post('Field17');
			$message = $this->input->post('message');
			$file1 = $this->input->post('userfile');
		}
		
		
		
		//email sent
			  $config =array(
	  
	   'protocol' => 'smtp',
	   'smtp_host' => 'ssl://smtp.gmail.com',
	   'smtp_port' => '465',
	   'smtp_user' => 'fonexpressfeedback@gmail.com',
	   'smtp_pass' => 'fonex20q'
	);
	$this->load->library('email',$config);
	$this->email->set_newline("\r\n");
	$this->email->from($email,$name);
	$this->email->to('edgarchris99@yahoo.com');
	$this->email->subject($subject);
	$this->email->message($message);
	$path = $this->config->item('server_root');
	$file = $path . '/fonexpress/attachments/'.$file1;
	$this->email->attach($file); 
	if($this->email->send()){
		echo"email sent";
	}else{
		show_error($this->email->print_debugger());
	}
			
			echo " your appliction has been recieved";
		}
	
		$this->load->view('gallery');
	}
		
		
	
}
