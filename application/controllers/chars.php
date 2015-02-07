<?php
class Chars extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('chars_model');
	}

	public function index()
	{
		$data['chars'] = $this->chars_model->get_chars();
		
		$this->load->view('templates/header', $data);
		$this->load->view('chars/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['chars'] = $this->chars_model->get_chars($id);
		
		$this->load->view('templates/header', $data);
		$this->load->view('chars/view', $data);
		$this->load->view('templates/footer');
	}
}