<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends APP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['main/PostModel']);
	}

	public function index()
	{
		$data = [];

		$filter = ['active' => 1, 'limit' => 3];
		$data['items'] = $this->PostModel->list($filter);

		$this->load->lview('main/index', $data);
	}

	public function item($id)
	{
		$data = [];
		$data['item'] = $this->PostModel->getByID($id);
		$data['other_items'] = $this->PostModel->listOther(true);

		$this->load->lview('main/item', $data);
	}
}
