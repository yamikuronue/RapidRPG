<?php
class Menu_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_menu()
	{
		
		#pages first
		$query = $this->db->select('name,slug')->from('pages')->where( array('menu' => 'true'))->order_by('menu_order')->get();
		
		$menu = $query->result_array();
		
		#static pages
		array_push($menu, array("name" => "Characters", "slug" => "chars"));
		array_push($menu, array("name" => "Sessions", "slug" => "logs"));

		return $menu;
	}
}