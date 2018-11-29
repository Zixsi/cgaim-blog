<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = [];
$config['signin'] = [
	[
		'field' => 'email',
		'label' => 'Email',
		'rules' => 'required|valid_email'
	],
	[
		'field' => 'password',
		'label' => 'Password',
		'rules' => 'trim|required'
	]
];

$config['post_item'] = [
	[
		'field' => 'name',
		'label' => 'Название',
		'rules' => 'required'
	],
	[
		'field' => 'description',
		'label' => 'Полное описание',
		'rules' => 'required'
	],
];

$config['tag_item'] = [
	[
		'field' => 'name',
		'label' => 'Название',
		'rules' => 'trim|required|min_length[3]|max_length[50]|is_unique[tags.name]'
	]
];