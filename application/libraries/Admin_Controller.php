<?php

class Admin_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('admin'))
		{
			redirect(base_url() . 'admin/login');
		}
	}
}