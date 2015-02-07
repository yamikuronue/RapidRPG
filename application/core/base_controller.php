<?php
class Base_Controller extends CI_Controller {
	public $headerData;
	
	public function __construct()
	{
		parent::__construct();
		
		//Menu
		$this->load->model('Menu_model');
		$this->headerData['menu'] = $this->Menu_model->get_menu();
		
		
	}
}