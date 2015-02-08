<?php
class Char_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_chars($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->select('chars.*, users.username AS ownerName')->join('users', 'chars.owner = users.userID')->get('chars');
			return $query->result_array();
		}
	
		$query = $this->db->select('chars.*, users.username AS ownerName')->join('users', 'chars.owner = users.userID')->get_where('chars', array('id' => $id));
		return $query->row_array();
	}
	
	public function add_char($owner)
	{
		$this->load->helper('url');
		
		$data = array(
				'owner' => $owner,
				'fName' => $this->input->post('fName'),
				'lName' => $this->input->post('lName'),
				'gender' => $this->input->post('gender'),
				'bday' => $this->input->post('bday'),
				'description' => $this->input->post('description'),
				'personality' => $this->input->post('personality'),
				'history' => $this->input->post('history'),
				'notes' => $this->input->post('notes'),
				
		);
	
		return $this->db->insert('chars', $data);
	}
}