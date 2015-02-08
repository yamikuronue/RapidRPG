<?php
class Base_Controller extends CI_Controller {
	public $headerData;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->library('session');
		
		//Menu
		$this->load->model('Menu_model');
		$this->headerData['menu'] = $this->Menu_model->get_menu();
		
	}
	
	public function requiresLoggedIn() {
		$this->load->model('User_model');
		
		$userID = $this->session->userdata('userID');
		if (empty($userID)) {
			redirect('/login', 'refresh');
		}		
	}
	
	public function requiresAdmin() {
		$this->load->model('User_model');
		
		$userID = $this->session->userdata('userID');
		if (empty($userID) || ! $this->User_model->user_is_admin($userID)) {
			redirect('/login', 'refresh');
		}
	}
}