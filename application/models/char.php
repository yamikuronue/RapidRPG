<?php
class Char_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_char($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('chars');
			return $query->result_array();
		}
	
		$query = $this->db->get_where('chars', array('id' => $id));
		return $query->row_array();
	}
}