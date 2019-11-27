<?php

include("connect.php");

$employeeID = $_GET['del'];

$delete = $db->delete("employees", "`EmployeeID`=:employeeID", 
	[ 
		'employeeID' => $employeeID
	]
);

$url = '/employee-list.php';
header('Location: '.$url);

?>
