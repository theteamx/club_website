<?php
class join_us extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('join_model');
		$this->load->helper('url_helper');
	}
	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$email = $_GET['emailField'];
		$name = $_GET['nameField'];
		$phone = $_GET['phoneField'];
		
		$data['title'] = 'Join us';
		
		$this->form_validation->set_rules('nameField', 'Name', 'required');
		$this->form_validation->set_rules('emailField', 'Email', 'required');
		$this->form_validation->set_rules('phoneField', 'Phone Number', 'required');
		
		if ($this->form_validation->run() === TRUE){
			$this->news_model->set_news();
			$this->load->view('newmember');
		}
				
	}
	
}	