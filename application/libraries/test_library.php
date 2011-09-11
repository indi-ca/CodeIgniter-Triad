<?php

class Test_Library
{
	public function __construct($params = array())
	{
	}

	public function test()
	{
		echo "Testing library";

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


		return 1;

	}

}

/* End of file test_library.php */
/* Location: ./application/libraries/test_library.php */