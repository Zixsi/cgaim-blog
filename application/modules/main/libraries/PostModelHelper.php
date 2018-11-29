<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostModelHelper extends APP_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function listAjaxPrepare(array $data = [])
	{
		foreach($data as &$val)
		{
			$val['name'] = htmlspecialchars_decode($val['name']);
			$val['img'] = !empty($val['img'])?'/'.$val['img']:TEMPLATE_DIR.'/blog_tpl/img/blog-img.svg';
			$val['ts'] = get_format_date($val['ts']);
			$val['short_description'] = htmlspecialchars_decode($val['short_description']);
			unset($val['description'], $val['active']);
		}

		return $data;
	}

	public function counter($id) 
	{	
		if(!isset($_COOKIE['post-item-'.$id]))
		{
			if($this->PostModel->setCounter($id))
			{
				setcookie('post-item-'.$id, '1');
			}
		}
	}
}