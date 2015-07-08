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
        $config = array();
        $config['useragent']           = "CodeIgniter";
        $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']            = "smtp";
        $config['smtp_host']           = "localhost";
        $config['smtp_port']           = "25";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;

        $this->load->library('email');

        $this->email->initialize($config);
		//echo "Aca va a ir la funcionalidad de envio de mails";
		$sendTo = "yamil777@gmail.com";
		$nombre = $this->input->post('name');
		$telefono = $this->input->post('tel');
		$email = $this->input->post('email');
		$ciudad = $this->input->post('ciudad');
		$mensaje = $this->input->post('msg');

		$this->email->from($email , $nombre);
		$this->email->to($sendTo);
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		$this->email->send();
		echo $this->email->print_debugger();
		/*mail($sendTo,$mensaje,
			"Name:$nombre
			Ciudad: $ciudad
			Telefono: $telefono
			Nombre: $nombre
			Description: $mensaje","From: $email"
		);
		*/

/*		mail(
			$sendTo,
			$this->input->post('msg'),
			"Nombre" + $this->input->post('name') + " Telefono" + $this->input->post('tel') + "E-mail" + $this->input->post('email') + "Ciudad" + $this->input->post('ciudad'),
			"From:'"+ $this->input->post('email') +"'"
		);
*/ /*
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
