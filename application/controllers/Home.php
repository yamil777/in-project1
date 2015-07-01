<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Home page
	 */
	public function index()
	{
		$data['images'] = $this->readBackgroundImage();
		$data['page'] = 'home';
		$this->load->view('home/home', $data);
	}

	public function readBackgroundImage() {

		$folder = opendir('background-img-home/');
		$images = array();

		while ($file = readdir($folder)) {
			if (!is_dir($file)) {
				$images[] = $file;
			}
		}
		sort($images);
		return $images;
	}
}
