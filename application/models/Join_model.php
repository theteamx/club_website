<?php
class Join_model extends CI_Model {
		public function __construct(){
		$this->load->database();
	}
		public function set_news(){

		$data = array(
		'nameField' => $this->input->post('name'),
		'phoneField' => $this->input->post('phone')
		'emailField' => $this->input->post('email')
		);
		
		return $this->db->insert('newbies', $data);
	}
}
?>