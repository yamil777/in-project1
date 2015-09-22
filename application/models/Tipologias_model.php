<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tipologias_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getTipologias($config) {
    	$validApartments = array();
    	$this->load->database();
        if(isset($config) 
            && count($config) > 0 
            && $config["persons"] > 0) {
            
            $this->db->where('max_capacity_tp >=', $config["persons"]);
        
        } 
        
    	$query = $this->db->get('tipologias');

    	return $query->result();
    }
}