<?php

require_once('connect.php');


//Przyklad: jak uzyc wrappera do zapytania o klientow pochodzacych z Niemiec
$result = $db->select('SELECT * FROM customers WHERE Country=:country',
	[
		'country' => "Germany"
	]
);

print_r($result);