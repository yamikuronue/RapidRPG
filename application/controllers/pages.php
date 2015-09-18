<?php
class pages extends Base_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Page_model');
	}
	
	public function view($page = 'home')
	{
		$data['page'] = $this->Page_model->get_page($page);
		
		if (empty($data['page']))
		{
			show_404();
		}
		
		
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $this->headerData);
		$this->load->view('pages/view', $data);
		$this->load->view('templates/footer', $data);
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');		
		
		$this->form_validation->set_rules('name', 'Page Name', 'required|max_length[20]');
		$this->form_validation->set_rules('content', 'Page Content', 'required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header', $this->headerData);
			$this->load->view('pages/create');
			$this->load->view('templates/footer');
		
		}
		else
		{
			$this->Page_model->add_page();
			redirect('/chars/', 'refresh');
		}
	}
	
}
