<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Validation extends CI_Form_validation {
 
	protected $CI;
 
	function __construct()
	{
		parent::__construct();
 
		$this->CI =& get_instance();
	}
	

	
}