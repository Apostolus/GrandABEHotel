<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller
{
	// Home page
	public function index()
	{
		$this->dashboard();
	}

	public function logout ()
	{
		session_destroy();
		redirect(base_url());
	}

	public function dashboard()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/templates/footer');
	}

	public function press_release($action = '', $id = '')
	{
		if($action == '')
		{
			$data['posts'] = $this->pressrelease_model->get_posts()?$this->pressrelease_model->get_posts():NULL;
			$this->load->view('admin/templates/header');
			$this->load->view('admin/press_release',$data);
			$this->load->view('admin/templates/footer');
		}else if($action == 'new')
		{
			$this->load->view('admin/templates/header');
			$this->load->view('admin/press_release_new');
			$this->load->view('admin/templates/footer');
		}else if($action == 'edit' && $id != '')
		{
			$data['posts'] = $this->pressrelease_model->get_post_single();
			$this->load->view('admin/templates/header');
			$this->load->view('admin/press_release',$data);
			$this->load->view('admin/templates/footer');
		}else if($action == 'submit')
		{
			if($this->pressrelease_model->new_content())
			{
				$this->session->set_flashdata('success', 'Press Release Modification Success!');
				redirect(base_url() . 'admin/press_release');
				exit;
			}else
			{	
				$this->session->set_flashdata('error', 'Press Release Modification Error (Code : 001)!');
				redirect(base_url() . 'admin/press_release');
				exit;
			}
		}else if($action == 'delete' && $id != '')
		{
			if($this->pressrelease_model->delete_content())
			{
				$this->session->set_flashdata('success', 'Press Release Modification Success!');
				redirect(base_url() . 'admin/press_release');
				exit;
			}else
			{
				$this->session->set_flashdata('error', 'Press Release Modification Error (Code : 002)!');
				redirect(base_url() . 'admin/press_release');
				exit;
			}
		}
	}

	public function carousel($action = '', $id = '')
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/carousel');
		$this->load->view('admin/templates/footer');
	}

	public function change_background()
	{
		$this->load->view('admin/templates/header');
		$this->load->view('admin/change_background');
		$this->load->view('admin/templates/footer');
	}
}

?>