<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Home page
	 */
	public function index()
	{
		$data['a'] = 6;
		$this->load->view('_partials/layout/_header');
		$this->load->view('home/home', $data);
		$this->load->view('_partials/_menu');
		$this->load->view('_partials/_slider');
		$this->load->view('_partials/layout/_footer');
	}
}
