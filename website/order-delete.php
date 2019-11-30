<?php

include("connect.php");

$orderID = $_GET['del'];

$delete = $db->delete("orders", "`OrderID`=:orderID",
	[
		'OrderID' => $OrderID
	]
);

$url = '/order-list.php';
header('Location: '.$url);

?>

<!-- additional comment on the bottom to make commit come through -->
