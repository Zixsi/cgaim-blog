<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tags extends APP_Controller
{
	public function index()
	{
		$data = [];
		$data['error'] = null;

		if(($_GET['action'] ?? '') == 'delete' && intval($_GET['id'] ?? 0))
		{
			$this->TagsModel->delete($_GET['id']);
			header('Location: ./');
		}

		if(cr_valid_key())
		{
			$name = $this->input->post('name', false);
			if($this->TagsModel->add($name))
			{
				header('Location: ./');
			}
			else
			{
				$data['error'] = $this->TagsModel->LAST_ERROR;
			}
		}

		$data['csrf'] = cr_get_key();
		$data['items'] = $this->TagsModel->list();

		$this->load->lview('tags/index', $data);
	}
	
}
