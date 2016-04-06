<?php //config.php
$CONFIG['config'] = array(
	'mysql' 	=> array(
		'host' 			=> 'localhost',
		'username' 		=> 'root',
		'password' 		=> 'root',
		'db' 			=> 'dblabb'
		),
	'remember' 	=> array(
		'cookie_name' 	=> 'hash',
		'cookie_expiry' => 604800
		),
	'session' 	=>  array(
		'session_name' 	=> 'username',
		)
	);

define("DB_HOST", $CONFIG['config']['mysql']['host']);
define("DB_NAME", $CONFIG['config']['mysql']['db']);
define("DB_PASS", $CONFIG['config']['mysql']['password']);
define("DB_USER", $CONFIG['config']['mysql']['username']);




/* ==========================================================================
   CLASS AUTOLOADER
   ========================================================================== */

spl_autoload_register(function($class) {
	if (is_file('Classes/' . $class . '.php'))
	{
		require_once('Classes/' . $class . '.php');
	}else
	 {
	 	 $filename = dirname(dirname(__FILE__)) . '/Classes/' . $class .'.php';
	 	 if(is_readable($filename))
	 	 {
	 	 	require_once $filename;
	 	 }
	 }
});

//$db = DB::getInstance();
