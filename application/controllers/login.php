<?php
class Login extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function logout() {
		$this->session->set_userdata('userID', null);
		redirect('/', 'refresh');
	}
	
	public function index() {
		$data['errmsg'] ='';
		$this->load->view('templates/header', $this->headerData);
		$this->load->view('login/index',$data);
		$this->load->view('templates/footer');
		
	}
	
	public function validate() {
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$data['errmsg'] ='';
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $this->headerData);
			$this->load->view('login/index',$data);
			$this->load->view('templates/footer');
			return;
		
		}
		
		$valid = $this->User_model->check_login($this->input->post('username'), $this->input->post('password'));
		
		if ($valid) {
			$this->session->set_userdata('userID', $this->User_model->getID($this->input->post('username')));
			redirect('/', 'refresh');
		} else {
			$data['errmsg'] = "Invalid username or password.";
			$this->load->view('templates/header', $this->headerData);
			$this->load->view('login/index', $data);
			$this->load->view('templates/footer');
			return;
		}
		
	}
}