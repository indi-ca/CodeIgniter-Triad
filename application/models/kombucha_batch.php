<?php

/**
 * Kombucha_Batch DataMapper Model
 *
 */
class Kombucha_Batch extends DataMapper {

	var $model = 'kombucha_batch';
	var $table = 'kombucha_batches';

	var $has_one = array();
	var $has_many = array();
	var $validation = array();

	var $default_order_by = array('id' => 'DESC');

	/**
	 * @var String
	 */
	var $description;

	/**
	 * @var Integer
	 */
	var $duration;

	// --------------------------------------------------------------------

	/**
	 * Constructor: calls parent constructor
	 */
    function __construct($id = NULL)
	{
		parent::__construct($id);
    }


}

/* End of file kombucha_batch.php */
/* Location: ./application/models/kombucha_batch.php */