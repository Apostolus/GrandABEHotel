<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PressRelease_model extends CI_Model
{
	// Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	// Obtain newest posts from the database
	public function get_posts($limit = '')
	{
		$this->db->select('*');
		$this->db->order_by('date_posted', 'DESC');
		if($limit != '')
		{
			$this->db->limit($limit);
		}
		return $this->db->get('press_release')->result();
	}

	//Get single Posts
	public function get_post_single($id)
	{
		$this->db->select('*');
		$array = array (
			'id' => $id
			);
		$this->db->where($array);
		return $this->db->get('press_release')->result();
	}

	//New / Edit Posts
	public function new_content($id = '')
	{
		if($id != '')
		{

		}else
		{
			$title 		= $this->input->post('title');
			$content 	= $this->input->post('content');
			$uuid 		= uniqid();


			//Upload Image
			$config['upload_path']          = 'assets/uploads';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']			= $uuid;
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('image'))
            {
            	//Dev
            	// echo '<pre>';
            	// print_r($this->upload->display_errors());
            	// echo '</pre>';

            	return false;
            }

			$data = array (
				'title'			=> $title,
				'home_content'	=> $content,
				'date_posted'	=> date('Y-m-d H:i:s'),
				'image'			=> $config['upload_path'] . '/' . $uuid,
				'uuid'			=> $uuid
				);

			return $this->db->insert('press_release', $data);
		}
	}

	//Delete Post
	public function delete_content($id = '')
	{

	}
}