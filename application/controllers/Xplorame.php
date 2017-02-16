<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xplorame extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->setLayout('default');
	}

	public function autobuses(){
		$this->load->view('xplorame/autobuses');
	}

	public function videos(){
		$this->load->view('xplorame/videos');
	}
}

