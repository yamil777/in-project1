<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipologias extends CI_Controller {

	/**
	 * Tipologias page
	 */
	public function index()
	{
		$data = array();
		$data['page'] = 'tipologias';
		$this->load->view('tipologias/tipologias', $data);
	}
}
