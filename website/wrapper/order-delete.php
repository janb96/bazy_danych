<?php

include("connect.php");

$employeeID = $_GET['del'];

$delete = $db->delete("orders", "`OrderID`=:orderID",
	[
		'OrderID' => $OrderID
	]
);

$url = '/order-list.php';
header('Location: '.$url);

?>
