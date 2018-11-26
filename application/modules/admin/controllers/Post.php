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

		if(cr_valid_key())
		{
			$form_data = $this->input->post(null, true);
			if($this->PostModel->add($form_data))
			{
				header('Location: ../');
			}
			else
			{
				$data['error'] = $this->PostModel->LAST_ERROR;
			}
		}

		$data['csrf'] = cr_get_key();

		$this->load->lview('post/add', $data);
	}

	public function edit($id)
	{
		$data = [];
		$data['error'] = null;

		if(cr_valid_key())
		{
			$form_data = $this->input->post(null, true);
			if($this->PostModel->update($id, $form_data))
			{
				header('Location: ./');
			}
			else
			{
				$data['error'] = $this->PostModel->LAST_ERROR;
			}
		}

		$data['item'] = $this->PostModel->getByID($id);
		$data['csrf'] = cr_get_key();


		$this->load->lview('post/edit', $data);
	}
}
