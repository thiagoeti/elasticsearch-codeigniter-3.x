<?php

class Model extends CI_Model {

	static public $elastic;

	/****************************************************************************/

	public function __construct()
	{
		parent::__construct();
	}

	/****************************************************************************/

	public function example()
	{
		// execute
		self::$elastic->method='GET';
		self::$elastic->path='/_stats';
		self::$elastic->query='{}';
		self::$elastic->result=self::$elastic->execute(self::$elastic->method, self::$elastic->path, self::$elastic->query);

		// debug
		header('content-type: text/plain;');
		print_r(self::$elastic->result);
		exit;
	}

	/****************************************************************************/

}
