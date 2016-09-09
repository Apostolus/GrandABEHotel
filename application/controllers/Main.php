<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	
	// Home page
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}

	// About
	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/about');
		$this->load->view('templates/footer');
	}

	// Philosophy
	public function philosophy()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/philosophy');
		$this->load->view('templates/footer');
	}
}

?>