<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends My_Controller {

	function __construct() {
		parent::__construct();
		$this->setLayout('index');
	}

	public function index() {


		$this->load->view('index');

	}

	public function test() {

		echo "test";

		$this->load->view('index');

	}

}

