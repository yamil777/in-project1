<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipologias extends CI_Controller {

	/**
	 * Tipologias page
	 */
	public function index()
	{
		$data['a'] = 6;
		$this->load->view('tipologias/tipologias', $data);
	}
}
