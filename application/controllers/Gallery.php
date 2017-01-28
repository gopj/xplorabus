<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->setLayout('gallery');
	}

	public function autobuses(){
		$this->load->view('galeria/autobuses');
	}

	public function videos(){
		$this->load->view('galeria/videos');
	}
}

