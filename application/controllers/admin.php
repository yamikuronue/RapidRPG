<?php
class admin extends Base_Controller {
    public function index()
	{
	    $this->requiresAdmin();
	    $this->load->view('templates/header', $this->headerData);
		$this->load->view("admin");
		$this->load->view('templates/footer');
	}
}
?>