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
}
