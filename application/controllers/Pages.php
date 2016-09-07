<?php
	class Pages extends CI_Controller
	{
		// Home page
		public function index()
		{
				$this->load->helper('url');
				$this->load->view('templates/header');
				$this->load->view('pages/home');
				$this->load->view('templates/footer');
		}
	}
?>