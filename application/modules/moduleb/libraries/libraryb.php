<?php

class LibraryB {

	public function someMethod()
	{
		echo "This is that some method from a library in module B";
		$batches = new Kombucha_Batch();
		$batches->get();
		foreach ($batches as $batch)
		{
			echo $batch->description;
		}

	}
	
}


