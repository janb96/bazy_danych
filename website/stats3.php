<?php

include("connect.php");

$sql_select = "SELECT CustomerID, CompanyName, count(OrderID) FROM `customers` NATURAL JOIN `orders` NATURAL JOIN `order_details` GROUP BY OrderID ORDER BY `count(OrderID)`  DESC LIMIT 10";

$ret_select = $db->select($sql_select);

var_dump($ret_select);