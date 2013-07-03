<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index(){
		$this->load->model('contact_model');
		$data['rows'] = $this->contact_model->contact();
		$this->load->view('contact_view',$data);
	}
	public function email(){
	$this->load->library('form_validation');
	// validation
	$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('email','Email andress','trim|required|valid_email' );
		
		//if validation ==true
		if($this->form_validation->run()==false){
			$this->load->view('contact_view');
		}else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
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
	$this->email->message('you have recieved a'.$message .'from '.$email);
	$path = $this->config->item('server_root');
	$file = $path . '/fonexpress/attachments/yourinfo.txt';
	$this->email->attach($file); 
	if($this->email->send()){
		echo"email sent";
		echo $name = $this->input->post('name');
		echo	$email = $this->input->post('email');
		echo	$subject = $this->input->post('subject');
		echo	$message = $this->input->post('message');
	}else{
		show_error($this->email->print_debugger());
	}
	}
	
	public function form(){
		$this->load->view('form');
	}
}
