<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tipologias_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function getTipologias($config) {
    	$validApartments = $this->getMockData();

    	/*$validApartments[0] = $apartment[0];
    	$validApartments[1] = $apartment[1]; */
    	return $validApartments;
    	if(empty($config)) {
    	}
    }

    private function getMockData() {
		$apartment[0] = array(
				'id' => 1,
				'type' => 'Basico dos personas',
				'description' => 'Departamento para dos personas, con cama matrimonial, incluye...'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.',
				'estado' => '1'
			);
		$apartment[1] = array(
				'id' => 1,
				'type' => 'Completo dos personas',
				'description' => 'Departamento para dos personas, con cama matrimonial, incluye...'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.',
				'estado' => '1'
			);
		$apartment[2] = array(
				'id' => 1,
				'type' => 'Basico cuatro personas',
				'description' => 'Departamento para cuatro personas, con cama matrimonial, incluye...'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.',
				'estado' => '1'
			);
		$apartment[3] = array(
				'id' => 1,
				'type' => 'Completo cuatro personas',
				'description' => 'Departamento para cuatro personas, con cama matrimonial, incluye...'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.'
				.'sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.sarasa.',
				'estado' => '1'
			);

		return $apartment;
    }
}