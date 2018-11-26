<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// (:any), (:num)

$route['default_controller'] = 'app/main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/main';
$route['admin/ajax/upload-file'] = 'admin/ajax/uploadFile';
$route['admin/(.*)'] = 'admin/$1';

$route['item/(:num)'] = 'app/main/item/$1';