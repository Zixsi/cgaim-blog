<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends APP_Controller
{
	public function index()
	{
		
	}

	public function uploadFile($targetFolder = null)
	{
		if(isset($_FILES['upload_img']) && !empty($_FILES['upload_img']['name']))
		{
			$this->load->config('upload');
			$this->upload_config = $this->config->item('editor');
			$this->load->library('upload', $this->upload_config);
			if($this->upload->do_upload('upload_img') == false)
			{
				throw new Exception($this->upload->display_errors(), 1);
			}
			else
			{
				$res = $this->upload->data();

				$data['size'] = $res['file_size'];
				$data['file'] =  $res['file_name'];
				$data['tmp_name'] = $res['raw_name'];
				$data['file'] = '/'.get_rel_path($res['full_path']);
	
				echo json_encode($data);
				die();
			}
		}
	}
}
