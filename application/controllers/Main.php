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

		// Query posts from database to be shown
		$this->load->model('pressrelease_model');
		$this->load->model('carousel_model');
		$data['press_release'] = $this->pressrelease_model->get_posts(PRESS_RELEASE_HOME_MAX);
		$data['carousel'] = $this->carousel_model->get();
		$this->load->view('pages/home', $data);
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

	// Business and meeting
	public function businessandmeeting()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/businessandmeeting');
		$this->load->view('templates/footer');
	}

	// Business and meeting
	public function facilities()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/facilities');
		$this->load->view('templates/footer');
	}

	// Business and meeting
	public function packages()
	{
		$this->load->view('templates/header');
		$this->load->view('pages/packages');
		$this->load->view('templates/footer');
	}

	// Press release page
	public function press_release()
	{

	}

	// Press release detail
	public function press_release_detail()
	{
		
	}

	// Reservation Page
	public function reservation()
	{
		// Array of all form field names
		$form_fields = array(
			'reservation_title',
			'reservation_first_name',
			'reservation_last_name',
			'reservation_mobile_phone',
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
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_last_name',
				'label' => 'Last Name',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_mobile_phone',
				'label' => 'Mobile Number',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_email',
				'label' => 'Email',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_email_confirmation',
				'label' => 'Email confirmation',
				'rules' => 'required|matches[reservation_email]',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
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
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_checkout',
				'label' => 'Check-Out',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_number_of_guests',
				'label' => 'Number of guests',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_room_type',
				'label' => 'Room Type',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
			),
			array(
				'field' => 'reservation_number_of_rooms',
				'label' => 'Number of rooms',
				'rules' => 'required',
				'errors' => array(
					'required' => 'Mohon diisi.',
				)
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
				$response['success_message'] = 'Thank you for submitting your booking with us, this is not a confirmation for your booking, our reservation staff will contact you through your email within 24 hours. Please also check your SPAM or JUNK mail. Thank you.';
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
						$response['error_message'][$field_name] = form_error($field_name);
					}
				}
			}

			echo json_encode($response);

			if ($response['success'])
			{
				// Send the reservation data to the admin's email
				$to = ADMIN_RESERVATION_EMAIL;
				$subject = 'Reservation : ' . $_POST['reservation_title'] . " " . $_POST['reservation_first_name'] . " " . $_POST['reservation_last_name'] ;

				$message = '
				<html>
					<head>
						<title>Reservation : ' . $_POST['reservation_title'] . ' ' . $_POST['reservation_first_name'] . ' ' . $_POST['reservation_last_name'] . '</title>
					</head>
					<body>
						<p>Formulir reservasi online : </p>
						<table class="tg">
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Title</td>
								<td>' . $_POST['reservation_title'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">First Name</td>
								<td>' . $_POST['reservation_first_name'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Last Name</td>
								<td>' . $_POST['reservation_last_name'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Mobile Number</td>
								<td>' . $_POST['reservation_mobile_phone'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Email</td>
								<td>' . $_POST['reservation_email'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">BBPin</td>
								<td>' . $_POST['reservation_bb_pin'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Check-In</td>
								<td>' . $_POST['reservation_checkin'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Check-Out</td>
								<td>' . $_POST['reservation_checkout'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Number of guests</td>
								<td>' . $_POST['reservation_number_of_guests'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Room Type</td>
								<td>' . $_POST['reservation_room_type'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Number of rooms</td>
								<td>' . $_POST['reservation_number_of_rooms'] . '</td>
							</tr>
							<tr>
								<td style="font-weight:bold;font-family:Verdana, Geneva, sans-serif !important;;background-color:#680100;color:#ffffc7;vertical-align:top">Additional Message</td>
								<td>' . $_POST['reservation_additional_messages'] . '</td>
							</tr>
						</table>
					</body>
				</html>
				';

				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

				// More headers
				$headers .= 'From: ' . ADMIN_RESERVATION_EMAIL . "\r\n";
				
				mail($to, $subject, $message, $headers);
			}
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