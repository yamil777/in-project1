<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Read_home_images extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getImages() {
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