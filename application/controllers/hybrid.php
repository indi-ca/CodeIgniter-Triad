<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//include_once "application/controllers/../modules/modulea/controllers/albert.php";

class Hybrid extends MX_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//load partial views

//		Datamapper::add_model_path( array( APPPATH.'modules/modulea', APPPATH.'modules/moduleb') );
//		$users = new User();
//		$users->get();
//		foreach ($users as $user)
//		{
//			echo $user->description;
//		}

		$this->load->module('modulea/modulea');
		$this->load->view('hybrid/index');
	}
}

/* End of file hybrid.php */
/* Location: ./application/controllers/hybrid.php */