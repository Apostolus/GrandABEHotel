<?php
	
	class Login extends CI_Controller
	{

		public function index()
		{
			if(!$this->input->post())
			{
				$this->load->view('admin/templates/header');
				$this->load->view('admin/login_form');
				$this->load->view('admin/templates/footer');
			}else
			{
				$this->load->model('login_model');
				if($data = $this->login_model->login())
				{
					//Set Message
					$this->session->set_flashdata('login', 'Login is Successful!');

					//Set session data
					$this->session->set_userdata('admin', $data->fullname);

					redirect(base_url() . 'admin');
				}else
				{
					$this->session->set_flashdata('login', 'Wrong Username or Password!');
					session_destroy();

					redirect(base_url());
				}
			}
		}

		//DevsOnly
		public function signup ()
		{
			if($this->input->post())
			{
				$password = $this->input->post('password');
				$username = $this->input->post('username');
				$fullname = $this->input->post('fullname');

				//Hash Password For Securtiy
				$pass_hashed = password_hash($password, PASSWORD_BCRYPT);

				$data = array(

					'username'	=> $username,
					'password'	=> $pass_hashed,
					'fullname'	=> $fullname

					);

				//Insert into database
				$this->db->insert('admin', $data);
				echo 'it is done';
			}else
			{
				$this->load->view('admin/sign_up');
			}
		}
	}