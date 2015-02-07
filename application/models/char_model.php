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
			$query = $this->db->get('chars');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('chars', array('id' => $id));
		return $query->row_array();
	}
	
	public function add_char()
	{
		$this->load->helper('url');
		
		$data = array(
				'fName' => $this->input->post('fName'),
				'lName' => $this->input->post('lName'),
				'description' => $this->input->post('description')
		);
	
		return $this->db->insert('chars', $data);
	}
}