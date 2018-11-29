<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends APP_Controller
{
	public function index()
	{
		$data = [];
		$data['items'] = $this->PostModel->list();

		$this->load->lview('post/index', $data);
	}

	public function add()
	{
		$data = [];
		$data['error'] = null;
		$data['form_data'] = [];

		if(cr_valid_key())
		{
			$data['form_data'] = $this->input->post(null, false);
			if($this->PostModel->add($data['form_data']))
			{
				header('Location: ../');
			}
			else
			{
				$data['error'] = $this->PostModel->LAST_ERROR;
			}
		}

		$data['tags'] = $this->TagsModel->list();
		$data['csrf'] = cr_get_key();

		$this->load->lview('post/add', $data);
	}

	public function edit($id)
	{
		$data = [];
		$data['error'] = null;
		$data['form_data'] = [];

		if(cr_valid_key())
		{
			$data['form_data'] = $this->input->post(null, false);
			if($this->PostModel->update($id, $data['form_data']))
			{
				header('Location: ./');
			}
			else
			{
				$data['error'] = $this->PostModel->LAST_ERROR;
			}
		}

		$data['tags'] = $this->TagsModel->list();
		$data['item'] = $this->PostModel->getByID($id);
		$data['csrf'] = cr_get_key();


		$this->load->lview('post/edit', $data);
	}
}
