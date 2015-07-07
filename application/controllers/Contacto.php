<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	/**
	 * Tipologias page
	 */
	public function index()
	{
		$data = array();
		$data['page'] = 'contacto';
		$this->load->view('contacto/contacto', $data);
	}

	public function sendMail()
	{
		echo "Aca va a ir la funcionalidad de envio de mails";

		/*
			$first = $_POST['first'];
			$last = $_POST['last'];
			$email = $_POST['email'];
			$extention = $_POST['extention'];
			$hardware = $_POST['hardware'];
			$software = $_POST['software'];
			$description = $_POST['description'];
			$Sendto = "test@test.com";
			$Bcc = "test2@test.com";
			mail($Sendto,$description,
			"Name:$first $last
			Extention: $extention
			Hardware: $hardware
			Software: $software
			Description: $description","From: $email");
			mail($email,$description,
			"We have received your email and we will contact you shortly","From: $Sendto" ); ?>
			<html>
			<body>
			<center><h3>Thank you
			<?php $first = $_POST['first'];print $first ;?>
			<?php $last = $_POST['last'];print  $last; ?> We will contact you shortly</h3></center></body></html>
		 */
	}
}
