<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->setLayout('gallery');
	}

	public function exteriores(){
		$this->load->view('galeria/exteriores');
		/*echo site_url();
		echo base_url();*/
	}

	public function interiores(){
		$this->load->view('galeria/interiores');
	}
}

