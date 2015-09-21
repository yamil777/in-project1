<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Home page
	 */
	public function index()
	{
		$data['imagePath'] = 'background-img-home/';
		$this->load->model('Read_images');
		$this->load->helper('form');
		$data['images'] = $this->Read_images->getImages($data['imagePath']);
		$data['page'] = 'home';
		$this->load->view('home/home', $data);
	}
}
