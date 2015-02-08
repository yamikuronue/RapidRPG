<?php
class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_users($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('users');
			return $query->result_array();
		}

		$query = $this->db->get_where('users', array('userID' => $id));
		return $query->row_array();
	}
	
	public function check_login($username, $password) {

 		$result = $this->db->select("Pass")->where(array('username' => $username))->get('users');
 		if ($result->num_rows() == 0) return false;
 		
 		return password_verify($password, $result->row()->Pass);
	}
	
	public function getID($username) {
		$query = $this->db->select('userID')->get_where('users', array('username' => $username));
		$row = $query->row();
		return $row->userID;
	}

	public function user_is_admin($id) {
		$query = $this->db->select('admin')->get_where('users', array('userID' => $id));
		$row = $query->row();
		if ($query->num_rows() == 0) return false;
		return $row->admin == 'TRUE';
	}
	
	public function user_can_see_mature($id) {
		$query = $this->db->select('mature')->get_where('users', array('userID' => $id));
		$row = $query->row();
		if ($query->num_rows() == 0) return false;
		return $row->mature == 'TRUE';
	}
	
	public function user_can_tag($id) {
		$query = $this->db->select('tagger')->get_where('users', array('userID' => $id));
		$row = $query->row();
		return $row->tagger == 'TRUE';
	}
	
	public function user_wants_email($id) {
		$query = $this->db->select('receiveMail')->get_where('users', array('userID' => $id));
		$row = $query->row();
		if ($query->num_rows() == 0) return false;
		return $row->receiveMail == 'TRUE';
	}
}
	
