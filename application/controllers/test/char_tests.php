<?php
require_once(APPPATH . '/controllers/test/Toast.php');

class Char_tests extends Toast
{
	function Char_tests()
	{
		parent::__construct(__FILE__);
		
		// Load any models, libraries etc. you need here
		$this->load->model('Char_model');
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

	function test_get_one_char()
	{
		$char = $this->Char_model->get_chars(2); //Sample data
		
		$this->_assert_equals($char['id'], "2");
		$this->_assert_equals($char['fName'], "Ariana");
		$this->_assert_equals($char['lName'], "Grande");
		$this->_assert_equals($char['ownerName'], "user"); //Should join on userID to get user name
	}
	
	function test_get_bad_char()
	{
		$char = $this->Char_model->get_chars(69); //Nonexistant char
		
		$this->_assert_empty($char); //Nothing returned.
	}
	
	function test_get_all_chars()
	{
		$chars = $this->Char_model->get_chars(); //Sample data
		$char = $chars[1];
		
		$this->_assert_equals($char['id'], "2");
		$this->_assert_equals($char['fName'], "Ariana");
		$this->_assert_equals($char['lName'], "Grande");
		$this->_assert_equals($char['ownerName'], "user"); //Should join on userID to get user name
	}
}

// End of file example_test.php */
// Location: ./system/application/controllers/test/example_test.php */