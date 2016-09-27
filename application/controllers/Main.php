<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
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

	// Rooms
	public function rooms()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/rooms');
		$this->load->view('templates/footer');
	}

	// Reservation Page
	public function reservation()
	{
		// Array of all form field names
		$form_fields = array(
			'reservation_title',
			'reservation_first_name',
			'reservation_last_name',
			'reservation_mobile_number',
			'reservation_email',
			'reservation_email_confirmation',
			'reservation_bb_pin',
			'reservation_checkin',
			'reservation_checkout',
			'reservation_number_of_guests',
			'reservation_room_type',
			'reservation_number_of_rooms',
			'reservation_additional_messages'
		);
		
		// Set the form validation rules
		$validation_rules = array(
			array(
				'field' => 'reservation_title',
				'label' => 'Title'
			),
			array(
				'field' => 'reservation_first_name',
				'label' => 'First Name',
				'rules' => 'required',
			),
			array(
				'field' => 'reservation_last_name',
				'label' => 'Last Name',
				'rules' => 'required',
			),
			array(
				'field' => 'reservation_mobile_number',
				'label' => 'Mobile Number',
				'rules' => 'required',
			),
			array(
				'field' => 'reservation_email',
				'label' => 'Email',
				'rules' => 'required',
			),
			array(
				'field' => 'reservation_email_confirmation',
				'label' => 'Email confirmation',
				'rules' => 'required|matches[reservation_email]',
			),
			array(
				'field' => 'reservation_bb_pin',
				'label' => 'BB PIN'
			),
			array(
				'field' => 'reservation_checkin',
				'label' => 'Check-In',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Waktu check-in harus diisi!',
				)
			),
			array(
				'field' => 'reservation_checkout',
				'label' => 'Check-Out',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Waktu check-out harus diisi!',
				)
			),
			array(
				'field' => 'reservation_number_of_guests',
				'label' => 'Number of guests',
				'rules' => 'required'
			),
			array(
				'field' => 'reservation_room_type',
				'label' => 'Room Type',
				'rules' => 'required'
			),
			array(
				'field' => 'reservation_number_of_rooms',
				'label' => 'Number of rooms',
				'rules' => 'required'
			),
			array(
				'field' => 'reservation_additional_messages',
				'label' => 'Additional Messages'
			),
		);

		$this->form_validation->set_rules($validation_rules);

		$data['reservation_form_data'] = array();
		if (isset($_GET['reservation_checkin'])) $data['reservation_form_data']['checkin'] = $_GET['reservation_checkin'];
		if (isset($_GET['reservation_checkout'])) $data['reservation_form_data']['checkout'] = $_GET['reservation_checkout'];
		if (isset($_GET['reservation_adults'])) $data['reservation_form_data']['adults'] = $_GET['reservation_adults'];
		if (isset($_GET['reservation_children'])) $data['reservation_form_data']['children'] = $_GET['reservation_children'];
		if (isset($_GET['reservation_promo_code'])) $data['reservation_form_data']['promo_code'] = $_GET['reservation_promo_code'];

		// Check if the form is submitted
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			// Create the array as a response to this operation
			$response = array();

			if ($this->form_validation->run() == TRUE)
			{
				$response['success'] = true;
				$response['success_title'] = 'You have successfully submitted your form.';
				$response['success_message'] = 'Thank you for submitting your booking with us, this is not a confirmation for your booking, our reservation staff will contact you through your email within 24 hours. Please also check your SPAM or JUNK mail.';
			}
			else
			{
				$response['success'] = false;
				$response['error_title'] = 'There are some errors in your form.';
				$response['error_message'] = array();

				// Send all of the errors
				foreach($form_fields as $field_name)
				{
					if (!empty(form_error($field_name)))
					{
						$response['error_message']['$field_name'] = form_error($field_name);
					}
				}
			}
			echo json_encode($response);
		}
		else
		{
			$this->load->view('templates/header');
			$this->load->view('pages/reservation');
			$this->load->view('templates/footer');
		}
	}
}

?>