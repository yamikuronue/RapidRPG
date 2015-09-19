<?php
require_once(APPPATH . '/controllers/test/Toast.php');

class Logs_tests extends Toast
{
	function Logs_tests()
	{
		parent::__construct(__FILE__);
		
		// Load any models, libraries etc. you need here
		$this->load->model('Logs_model');
	}

	/**
	 * OPTIONAL; Anything in this function will be run before each test
	 * Good for doing cleanup: resetting sessions, renewing objects, etc.
	 */
	function _pre() {
		$active_group = 'test';
	}

	/**
	 * OPTIONAL; Anything in this function will be run after each test
	 * I use it for setting $this->message = $this->My_model->getError();
	 */
	function _post() {
		$active_group = 'default';
	}


	/* TESTS BELOW */

	function test_get_one_log()
	{
		$log = $this->Logs_model->get_log(2); //Sample data
		
		$this->_assert_equals($log['id'], "2");
		$this->_assert_equals($log['title'], "Second Log");
	}
	
	function test_get_bad_log()
	{
		$log = $this->Logs_model->get_log(69); //Nonexistant char
		
		$this->_assert_empty($log); //Nothing returned.
	}
}

// End of file example_test.php */
// Location: ./system/application/controllers/test/example_test.php */