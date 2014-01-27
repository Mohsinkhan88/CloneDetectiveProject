<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH . '/controllers/test/Toast.php');

class TestResetPassword extends Toast
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

	function test_resetPassword()
	{
		$user_id = 'firstuser';
		$user_id = '1';
		$new_pass_key = '0e529db56b61b7525644d642f2104de4';
		
		$new_password = 'lumsdssd';
		
		$arrayResult = $this->tank_auth->reset_password($user_id, $new_pass_key, $new_password);
		//echo $arrayResult.'<br/>';
		if(!empty($arrayResult)){
			$this->_assert_equals($arrayResult[0], $user_id);
			return;
		}
		else{
			$new_password = 'lumsdssd1';
			$arrayResult = $this->tank_auth->reset_password($user_id, $new_pass_key, $new_password);
			//echo $arrayResult.'<br/>';
			if(!empty($arrayResult)){
				$this->_assert_equals($arrayResult[0], $user_id);
				return;
			}
		}
		
		$this->_assert_equals(1, 2);
	}
} 

?>