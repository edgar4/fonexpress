<?php
class Gallery_model extends CI_Model{
	  var $gallery_path;
	  
	  public function __construct(){
		parent::__construct();
		
		$this->gallery_path = realpath(APPPATH . '../attachments');
	  }
	   
	public function do_upload(){
		
		$config = array(
		'allowed_types' =>'gif|jpg|png|jpeg',
		'upload_path' => $this->gallery_path ,
	
		 
		);
		
		
	
		
		$this ->load->library('upload',$config);
		$this->upload->do_upload();
	}
}

?>