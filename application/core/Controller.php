<?php

class Controller extends CI_Controller {

	static public $project;

	/****************************************************************************/

	public function __construct()
	{
		parent::__construct();

		// elastic
		$this->load->library('elasticsearch');

		// model
		Model::$elastic=$this->elasticsearch;
	}

	/****************************************************************************/

}
