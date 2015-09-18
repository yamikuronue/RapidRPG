<?php
class Base_Controller extends CI_Controller {
	public $headerData;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url');
		$this->load->library('session');
		
		//Menu
		$this->load->model('Menu_model');
		$this->headerData['menu'] = $this->Menu_model->get_menu();
		$this->headerData['loggedin'] = !empty($this->session->userdata('userID'));
		$this->headerData['isAdmin'] = $this->User_model->user_is_admin($this->session->userdata('userID'));
		
	}
	
	public function requiresLoggedIn() {	
		$userID = $this->session->userdata('userID');
		if (empty($userID)) {
			redirect('/login', 'refresh');
		}		
	}
	
	public function requiresAdmin() {
		$userID = $this->session->userdata('userID');
		if (empty($userID) || ! $this->User_model->user_is_admin($userID)) {
			redirect('/login', 'refresh');
		}
	}
}