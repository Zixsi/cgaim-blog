<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends APP_Controller
{
	public function __construct()
	{
		parent::__construct();

		header('Pragma: no-cache');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Content-type: application/json');
	}

	public function index()
	{
		echo '';
	}
}
