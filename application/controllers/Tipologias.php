<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipologias extends CI_Controller {

	/**
	 * Tipologias page
	 */
	public function index()
	{
		$data['pathEstandarUno'] = 'img-estandar-uno';
		$data['pathEstandarDos'] = 'img-estandar-dos';
		$data['pathSuperiorUno'] = 'img-superior-uno';
		$data['pathSuperiorDos'] = 'img-superior-dos';

		$this->load->model('Tipologias_model');
		$this->load->model('Read_images');
		//adding this helper to can use forms
		$this->load->helper('form');
		/*
		$data['estandarUnoImg'] = $this->Read_images->getImages($data['pathEstandarUno']);
		$data['estandarDosImg'] = $this->Read_images->getImages($data['pathEstandarDos']);
		$data['superiorUnoImg'] = $this->Read_images->getImages($data['pathSuperiorUno']);
		$data['superiorDosImg'] = $this->Read_images->getImages($data['pathSuperiorDos']);
		*/
		$data['imagesTipologias'][1] = $this->Read_images->getImages($data['pathEstandarUno']);
		$data['imagesTipologias'][2] = $this->Read_images->getImages($data['pathSuperiorUno']);
		$data['imagesTipologias'][3] = $this->Read_images->getImages($data['pathEstandarDos']);
		$data['imagesTipologias'][4] = $this->Read_images->getImages($data['pathSuperiorDos']);

		$data['page'] = 'tipologias';
		$data['availableApartments'] =
			$this->Tipologias_model->getTipologias($this->input->post());
		$this->load->view('tipologias/tipologias', $data);
	}
}
