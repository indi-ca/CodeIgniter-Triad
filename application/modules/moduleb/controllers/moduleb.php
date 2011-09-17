<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModuleB extends MX_Controller {

	public function index()
	{
		$this->load->library('libraryb');
		$this->libraryb->someMethod();
		$this->load->view('mainb');
	}
}

/* End of file moduleb.php */
/* Location: ./application/modules/modulea/controllers/moduleb.php */