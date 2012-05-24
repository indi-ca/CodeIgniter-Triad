<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Symphony extends MX_Controller {

	public function index()
	{
		$this->load->view('training');
	}
}

/* End of file symphony.php */
/* Location: ./application/modules/symphony/controllers/symphony.php */