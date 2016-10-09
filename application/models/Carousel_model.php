<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carousel_model extends CI_Model
{
	// Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

	// Obtain all carousel data
	public function get()
	{
		$this->db->select('*');
		return $this->db->get('carousel')->result();
	}
}