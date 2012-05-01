<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		echo "Test\n";

		$batch = new Kombucha_Batch();
		$batch->description = 'From TK';
		$batch->duration = '14';
		$batch->save();

		$batches = new Kombucha_Batch();
		$batches->get();
		foreach ($batches as $batch)
		{
			echo $batch->description;
		}
		echo "Test finished\n";
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */