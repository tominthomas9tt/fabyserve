<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['(:any)'] = 'pages/router/$1';

$route['default_controller'] = 'pages/router';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
