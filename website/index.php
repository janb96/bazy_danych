<?php

require_once('connect.php');

$result = $db->select('SELECT * FROM customers WHERE Country=:country',
	[
		'country' => "Germany"
	]
);

print_r($result);