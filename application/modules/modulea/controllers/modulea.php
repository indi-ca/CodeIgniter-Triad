<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModuleA extends CI_Controller {

	public function index()
	{

		$this->load->library('librarya');
		$this->librarya->someMethod();
		$this->load->view('main');
	}
}

/* End of file modulea.php */
/* Location: ./application/modules/modulea/controllers/modulea.php */