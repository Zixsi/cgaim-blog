<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends APP_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		try
		{
			$data = $this->input->post(null, true);
			$this->form_validation->reset_validation();
			$this->form_validation->set_data($data);

			if($this->form_validation->run('signin') == FALSE)
			{
				throw new Exception($this->form_validation->error_string(), 1);
			}

			if(($res = $this->UserModel->getByEmail($data['email'])) == FALSE)
			{
				throw new Exception("User not found", 1);
			}

			if($this->UserModel->pwdHash($data['password']) !== $res['password'])
			{
				throw new Exception("Invalid email or password", 1);
			}

			unset($res['password']);
			if(isset($data['remember']))
			{
				$time = 3600 * 24 *30;
				set_cookie('remember', '1', $time);
				set_cookie('email', $data['email'], $time);
			}
			else
			{
				delete_cookie('remember');
				delete_cookie('email');
			}

			$res['last_update'] = time();
			$this->setUser($res);
			
			return true;
		}
		catch(Exception $e)
		{
			$this->LAST_ERROR = $e->getMessage();
			//var_dump($e->getMessage());
		}

		return false;
	}

	public function getLoginRemember()
	{
		return [
			'email' => get_cookie('email', true),
			'remember' => (bool) get_cookie('remember', true)
		];
	}

	public function logout()
	{
		$this->session->sess_destroy();
		return true;
	}

	public function setUser($user = [])
	{
		$this->session->set_userdata('USER', $user);
	}

	public function user()
	{
		return $this->session->userdata('USER');
	}

	public function userID()
	{
		return $this->user()['id'];
	}

	public function userRole()
	{
		return intval($this->user()['role']);
	}

	public function check()
	{
		if(($user = $this->user()) == false )
		{
			return false;
		}

		if(isset($user['id']) == false || $user['id'] < 1 || intval($user['active']) === 0)
		{
			return false;
		}

		return true;
	}
}