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
	public function get_posts($limit)
	{
		$this->db->select('*');
		$this->db->order_by('date_posted', 'DESC');
		$this->db->limit($limit);
		return $this->db->get('press_release')->result();
	}
}