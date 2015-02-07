<?php
class Page_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_page($slug)
	{
		$query = $this->db->get_where('pages', array('slug' => $slug));
		return $query->row_array();
	}
	
	public function add_page()
	{
		$this->load->helper('url');
		
		if ($this->input->post('menu') == 'true') {
			$query = $this->db->query("SELECT MAX(menu_order) AS maxOrder FROM pages");
			$row = $query->row();
			$menu_order = $row->maxOrder + 1;
		} else {
			$menu_order = -1;
		}
	
		$slug = url_title($this->input->post('name'), 'dash', TRUE);
		
		$data = array(
				'name' => $this->input->post('name'),
				'slug' => $slug,
				'content' => $this->input->post('content'),
				'menu' => $this->input->post('menu'),
				'menu_order' => $menu_order
		);
	
		return $this->db->insert('pages', $data);
	}
}
