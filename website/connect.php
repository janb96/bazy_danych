<?php

require_once('mysql-wrapper/mysql_wrapper.class.php');

$db = new MYSQL_WRAPPER();

$db->connect(array(
	'host' => 'db',
	'port' => '3306',
	'username' => 'user1',
	'password' => '123',
	'database' => 'test_db'
));