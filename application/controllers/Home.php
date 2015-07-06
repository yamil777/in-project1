<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Home page
	 */
	public function index()
	{
		$this->load->model('Get_data');
		$data['images'] = $this->Get_data->getImages();
		$data['page'] = 'home';
		$this->load->view('home/home', $data);
	}
}
