<?php
class Logs extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Logs_model');
	}

	public function index()
	{
		$data['logs'] = $this->Logs_model->get_logs_list();
		$data['loggedin'] = !empty($this->session->userdata('userID'));
		
		$this->load->view('templates/header', $this->headerData);
		$this->load->view('logs/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['log'] = $this->Logs_model->get_log($id);
		
		if (empty($data['log']))
		{
			show_404();
		}
		
		$data['title'] = "Log: " . $data['log']['title'];
		
		$this->load->view('templates/header', $this->headerData);
		$this->load->view('logs/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->requiresLoggedIn();
		
		//TODO
	}
}