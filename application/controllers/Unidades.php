<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unidades extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->setLayout('default');
	}

	public function autobuses(){
		$this->load->view('unidades/autobuses');
	}

}

