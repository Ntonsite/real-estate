<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$active_group = 'default';
$active_record = TRUE;

//Add this to fetch the CLEARDB_DATABASE_URL
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => $url["host"],
	'username' => $url["user"],
	'password' => $url["pass"],
	'database' => substr($url["path"], 1),
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


/* End of file database.php */
/* Location: ./application/config/database.php */