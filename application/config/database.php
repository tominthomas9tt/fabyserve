<?php
defined('BASEPATH') or exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

if (ENVIRONMENT !== 'production') {
	// application will be connected to DEV database
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "";
} else {
	// application will be connected to PRODUCTION database
	$hostname = "151.106.124.1";
	$username = "u182972250_faby_user";
	$password = "u182972250_faby_Pass";
	$database = "u182972250_faby_serve";
}

$db['default'] = array(
	'dsn' => '',
	'hostname' => $hostname,
	'username' => $username,
	'password' => $password,
	'database' => $database,
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
