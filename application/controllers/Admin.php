<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');

		if ($_SESSION['admin'] == FALSE)
		{
			login();
		}
	}
	
	// Home page
	public function index()
	{
		dashboard();
	}

	private function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'GET')
		{

		}
		else
		{
			if ($_POST['username'] == ADMIN_USERNAME && $_POST['password'] == ADMIN_PASSWORD)
			{
				$_SESSION['admin'] = TRUE;
			}
			index();
		}
	}

	private function dashboard()
	{

	}

	public function press_release($action = '', $id = '')
	{

	}

	public function carousel($action = '', $id = '')
	{
		
	}
}

?>