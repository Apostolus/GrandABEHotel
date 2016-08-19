<?php
	class Pages extends CI_Controller{

		public function index(){

				$this->load->helper('url');
				$this->load->view('templates/header');
				$this->load->view('templates/navbar');
				$this->load->view('pages/home');
				$this->load->view('templates/footer');
		}

		// public function index($page= 'home'){

		// 	if(!file_exists('application/views/pages/'.$page.'.php'))
		// 	{
		// 		echo "Sorry, file does not exist";
		// 	}
		// 	else
		// 	{
		// 		$this->load->helper('url');
		// 		$data['title']=ucfirst($page);
		// 		$this->load->view('templates/header',$data);
		// 		$this->load->view('templates/navbar',$data);
		// 		$this->load->view('pages/'.$page,$data);
		// 		$this->load->view('templates/footer',$data);
		// 	}
		// }

	}
?>