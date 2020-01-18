<?php

include("connect.php");

$sql_select = "SELECT ShipCity, count(OrderID) as howMuch FROM `orders` GROUP BY ShipCity ORDER BY `howMuch` DESC";

$ret_select = $db->select($sql_select);

var_dump($ret_select);

?>