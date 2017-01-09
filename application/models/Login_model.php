<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
	private $username, $password;

	public function login()
	{
		$this->username = $this->input->post('username');
		$this->password = $this->input->post('password');

		//Check the Username && Password
		if($query = $this->db->get_where('admin', array('username' => $this->username))->row())
		{
			if(password_verify($this->password, $query->password))
			{
				return $query;
			}else
			{
				return false;
			}
		}else
		{
			return false;
		}

	}

}