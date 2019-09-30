<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TagsModel extends APP_Model
{
	private const TABLE = 'tags';

	public function __construct()
	{
		parent::__construct();
	}

	public function add(string $name)
	{
		try
		{
			$data = [
				'name' => strtolower($name)
			];

			$this->form_validation->reset_validation();
			$this->form_validation->set_data($data);
			if($this->form_validation->run('tag_item') == FALSE)
			{
				throw new Exception($this->form_validation->error_string(), 1);
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

	public function delete($id)
	{
		return $this->db->delete(self::TABLE, ['id' => $id]);
	}

	public function list()
	{
		$sql = 'SELECT * FROM '.self::TABLE.' ORDER BY name ASC';
		if($res = $this->db->query($sql)->result_array())
		{
			return $res;
		}

		return false;
	}
}