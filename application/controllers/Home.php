<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Home page
	 */
	public function index()
	{
		$this->load->model('Read_home_images');
		$this->load->helper('form');
		$data['images'] = $this->Read_home_images->getImages();
		$data['page'] = 'home';
		$this->load->view('home/home', $data);
	}
}
