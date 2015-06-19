<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Home page
	 */
	public function index()
	{
		$data['a'] = 6;
		$this->load->view('home/home', $data);
	}
}
