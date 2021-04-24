<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['service/(:any)']='services/router/$1';
$route['service']='services/router';

$route['(:any)'] = 'pages/router/$1';

$route['default_controller'] = 'pages/router';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
