<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . '/controllers/test/Toast.php');

class TestRegister extends Toast
{
	//function My_test_class()
	function __construct()
	{
		parent::__construct();
		parent::Toast('users/reset_password'); // Remember this
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
	}

	function test_register()
	{
		$username = 'aUser';
		$email = 'abc@gmail.com';
		$password = '1';
		$email_activation = $this->config->item('email_activation', 'tank_auth');
		$arrayResult = $this->tank_auth->create_user($username, $email, $password, $email_activation);
		
		if(!empty($arrayResult)){
			$this->_assert_equals($arrayResult[0], $username);
		}
		else{
			$this->_assert_equals(1, 2); // FAILS
		}
	}
} 

?>