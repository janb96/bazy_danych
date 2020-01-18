<?php

include("connect.php");

$sql_select = "SELECT OrderID, sum(Quantity) FROM `order_details` GROUP BY OrderID ORDER BY `sum(Quantity)`  DESC";

$ret_select = $db->select($sql_select);

var_dump($ret_select);