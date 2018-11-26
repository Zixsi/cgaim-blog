<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Загрузка файлов домашних заданий
$config['post_item'] = [
	'upload_path' => './data/post/',
	'allowed_types' => 'jpeg|jpg|png',
	'max_size' => 2048, // 2 мб
	'max_width' => 2048,
	'max_height' => 2048,
	'encrypt_name' => true,
	'remove_spaces' => true
];

$config['editor'] = [
	'upload_path' => './data/editor/',
	'allowed_types' => 'jpeg|jpg|png',
	'max_size' => 2048, // 2 мб
	'max_width' => 2048,
	'max_height' => 2048,
	'encrypt_name' => true,
	'remove_spaces' => true
];