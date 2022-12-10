<?php
require 'environment.php';

define("BASE", "http://localhost/cms/");

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'cms';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
} else {
	$config['dbname'] = 'cms';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
?>