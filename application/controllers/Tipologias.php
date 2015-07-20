<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipologias extends CI_Controller {

	/**
	 * Tipologias page
	 */
	public function index()
	{
		$this->load->model('Tipologias_model');
		$data = array();
		$data['page'] = 'tipologias';
		$data['availableApartments'] =
			$this->Tipologias_model->getTipologias($this->input->post());
		$this->load->view('tipologias/tipologias', $data);
	}
}
