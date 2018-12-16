<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends APP_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['main/PostModel', 'main/TagsModel']);
	}

	public function index()
	{
		$data = [];

		$data['filter'] = [
			'active' => 1, 
			'limit' => 3, 
			'tag' => ($_GET['tag'] ?? ''),
			'search' => ($_GET['q'] ?? '') 
		];

		$data['tags'] = $this->TagsModel->list();
		$data['items_popular'] = $this->PostModel->listPopular(3);
		$data['items'] = $this->PostModel->list($data['filter']);
		$data['items_count'] = $this->PostModel->list($data['filter'], true);
		$data['show_more_button'] = $data['items_count'] > $data['filter']['limit'];

		$this->load->lview('main/index', $data);
	}

	public function ajaxBlogList()
	{
		$this->load->library(['main/PostModelHelper']);
		$data = [];

		$filter = [
			'active' => 1, 
			'limit' => ($_POST['limit'] ?? 5), 
			'offset' => ($_POST['offset'] ?? 0), 
			'tag' => ($_POST['tag'] ?? ''),
			'search' => ($_POST['search'] ?? '')
		];
		if(($data['items'] = $this->PostModel->list($filter)) !== false)
		{
			$data['items'] = $this->PostModelHelper->listAjaxPrepare($data['items']);
		}
		
		header('Pragma: no-cache');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Content-type: application/json');

		echo json_encode($data);
	}

	public function item($id)
	{
		$data = [];
		
		if(($data['item'] = $this->PostModel->getByID($id)) === false)
		{
			header('Location: /');
		}

		$this->load->library(['main/PostModelHelper']);
		$this->PostModelHelper->counter($id);
		$data['page_title'] = $data['item']['name'];
		$data['page_keywords'] = $data['item']['meta_keywords'];
		$data['page_description'] = $data['item']['meta_description'];
		$data['tags'] = $this->TagsModel->list();
		$data['items_popular'] = $this->PostModel->listPopular(3);
		$data['other_items'] = $this->PostModel->listOther(true);

		$this->load->lview('main/item', $data);
	}


}
