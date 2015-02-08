<?php
class Chars extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Char_model');
	}

	public function index()
	{
		$data['chars'] = $this->Char_model->get_chars();
		$data['loggedin'] = !empty($this->session->userdata('userID'));
		
		$this->load->view('templates/header', $this->headerData);
		$this->load->view('chars/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id)
	{
		$data['char'] = $this->Char_model->get_chars($id);
		
		if (empty($data['char']))
		{
			show_404();
		}
		$data['title'] = "Character: " . $data['char']['fName'] .' ' . $data['char']['lName'];
		
		$this->load->view('templates/header', $this->headerData);
		$this->load->view('chars/view', $data);
		$this->load->view('templates/footer');
	}
	
	public function create()
	{
		$this->requiresLoggedIn();
		
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Create a character';
		
	
		$this->form_validation->set_rules('fName', 'First Name', 'required|max_length[128]');
		$this->form_validation->set_rules('lName', 'Last Name', 'required|max_length[128]');
		$this->form_validation->set_rules('bday', 'Birthday', 'required|callback_date_valid');
		$this->form_validation->set_rules('description', 'Description', 'required|max_length[16777215]');
		$this->form_validation->set_rules('personality', 'Personality', 'required|max_length[16777215]');
		$this->form_validation->set_rules('history', 'History', 'required|max_length[16777215]');
		$this->form_validation->set_rules('notes', 'Notes', 'required|max_length[16777215]');

	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $this->headerData);
			$this->load->view('chars/create');
			$this->load->view('templates/footer');
	
		}
		else
		{
			$this->Char_model->add_char($this->session->userdata('userID'));
			redirect('chars/', 'refresh');
		}
	}
	
	function date_valid($date){
		$dateArray = date_parse($date);
		
		return checkdate($dateArray['month'], $dateArray['day'], $dateArray['year']);
	}
}