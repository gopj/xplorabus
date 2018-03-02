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

		$data["carpetas"] = $this->_carpeta_galeria();
		
		$this->load->view('xplorame/galeria', $data);
	}

	public function sub_galeria($gallery_name){
		$this->load->view('xplorame/sub_galeria', $this->_creacion_galeria($gallery_name));
	}

	public function _carpeta_galeria(){
		$dir = getcwd() . "/img/gallery/";
		$results = scandir($dir);

		foreach ($results as $result) {
			if ($result === '.' or $result === '..') continue;

			if (is_dir($dir . '/' . $result)) {
				$n = 0;

				$carpetas['nombre'][] = $result;

				$nombre_imagen 		= str_replace($dir . $carpetas['nombre'][$n], "",  glob($dir . $carpetas['nombre'][$n]. "/*portada*.jpg"));
				// DEV
				$carpetas['f_dir'][]= "/xplorabus/img/gallery/{$carpetas['nombre'][$n]}/" . str_replace("/", "", $nombre_imagen[0]);

				// PROD
				//$carpetas['f_dir'][]= "/img/gallery/{$carpetas['nombre'][$n]}/" . str_replace("/", "", $nombre_imagen[0]);


				$n++;
			}
		}

		return $carpetas;
	}

	public function _creacion_galeria($galeria) {
		$dir = getcwd() . "/img/gallery/{$galeria}";
		$result["imgs"] = str_replace($dir, "",  glob($dir. "/*.jpg"));

		//DEV
		$result["f_dir"] = "/xplorabus/img/gallery/{$galeria}";

		$result["gallery_name"] = $galeria;

		//PROD
		//$result["f_dir"] = "/img/gallery/{$galeria}";

		return $result;
	}
}

