<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostModel extends APP_Model
{
	private const TABLE = 'posts';
	private const TABLE_FIELDS = ['name', 'short_description', 'description', 'img', 'ts', 'active'];
	private $upload_config = null;

	public function __construct()
	{
		parent::__construct();
	}

	public function add($data = [])
	{
		try
		{
			$this->checkFields($data);
			if($img = $this->uploadImg())
			{
				$data['img'] = $img;
			}

			if($this->db->insert(self::TABLE, $data))
			{
				return $this->db->insert_id();
			}
		}
		catch(Exception $e)
		{
			$this->LAST_ERROR = $e->getMessage();
		}

		return false;
	}

	public function update($id, $data = [])
	{
		try
		{
			$this->checkFields($data);

			if($img = $this->uploadImg())
			{
				$data['img'] = $img;
			}

			$this->db->where('id', $id);
			if($this->db->update(self::TABLE, $data))
			{
				return true;
			}
		}
		catch(Exception $e)
		{
			$this->LAST_ERROR = $e->getMessage();
		}

		return false;
	}

	public function delete($id)
	{
		return false;
	}

	public function getByID($id)
	{
		$bind = [$id];
		$sql = 'SELECT * FROM '.self::TABLE.' WHERE id = ?';
		if($row = $this->db->query($sql, $bind)->row_array())
		{
			return $row;
		}

		return false;
	}

	public function list($filter = [], $cnt = false)
	{
		$filter['limit'] = abs(intval($filter['limit'] ?? 10));
		$filter['offset'] = abs(intval($filter['offset'] ?? 0));

		$where_sql = '';
		if(isset($filter['active']))
		{
			$where_sql .= ' AND active = '.intval($filter['active']);
		}

		if($cnt)
		{
			$sql_cnt  = 'SELECT count(*) as count FROM '.self::TABLE.' WHERE id IS NOT NULL '.$where_sql;

			if($row = $this->db->query($sql_cnt, [])->row_array())
			{
				return intval($row['count']);
			}

			return 0;
		}
		else
		{
			$bind = [];
			$sql = 'SELECT * FROM '.self::TABLE.' WHERE id IS NOT NULL '.$where_sql.' ORDER BY id DESC ';
			$sql .= ' LIMIT '.$filter['limit'].' OFFSET '.$filter['offset'];

			if($rows = $this->db->query($sql, $bind)->result_array())
			{
				return $rows;
			}
		}

		return false;
	}

	public function listOther($rand = false)
	{
		$sql = 'SELECT id, name, short_description, img, ts FROM '.self::TABLE.' WHERE active = 1 ORDER BY ';
		$sql .= $rand?' RAND() ':' id DESC ';
		$sql .= ' LIMIT 3';
		if($rows = $this->db->query($sql, [])->result_array())
		{
			return $rows;
		}

		return false;
	}

	private function uploadImg()
	{
		if(isset($_FILES['img']) && !empty($_FILES['img']['name']))
		{
			$this->load->config('upload');
			$this->upload_config = $this->config->item('post_item');
			$this->load->library('upload', $this->upload_config);
			if($this->upload->do_upload('img') == false)
			{
				throw new Exception($this->upload->display_errors(), 1);
			}
			else
			{
				$res = $this->upload->data();
				return get_rel_path($res['full_path']);
			}
		}

		return false;
	}

	private function checkFields(&$data = [])
	{
		$this->form_validation->reset_validation();
		$this->form_validation->set_data($data);
		if($this->form_validation->run('post_item') == FALSE)
		{
			throw new Exception($this->form_validation->error_string(), 1);
		}

		foreach($data as $key => $val)
		{
			if(in_array($key, self::TABLE_FIELDS) == false)
			{
				unset($data[$key]);
			}
			else
			{
				if(in_array($key, ['short_description', 'description', 'name']))
				{
					$data[$key] = htmlspecialchars($val);
				}
			}
		}
		
		return true;
	}
}