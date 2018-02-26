<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Xplorame extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->setLayout('default');
	}

	public function videos(){
		$this->load->view('xplorame/videos');
	}

	public function mvv(){
		$this->load->view('xplorame/mvv');
	}

	public function galeria(){

		/* $dir = "/opt/lampp/htdocs/xplorabus/img";*/
		$dir = getcwd() . "/img/gallery/carnaval";
		
		$data["imgs"] = str_replace($dir, "",  glob($dir. "/*.jpg"));

		$data["f_dir"] = "/xplorabus/img/gallery/carnaval";

		$this->load->view('xplorame/galeria', $data);
	}
}

