<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.3.0';
$config['encryption_key'] = 'ad6e7c7fafb64d58a48a190886035340f356afc2';
$config['session_crypt_key'] = 'a0dfa8c81c42ba6bb7f353a5f4cc652bdacb4492';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'database',
		'database' => 'mydb',
		'username' => 'myuser',
		'password' => 'secret',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);

// EOF