<?php

include("connect.php");

$sql_select = "SELECT CompanyName, sum(howMany) as TotalQuantitiy FROM (SELECT CompanyName, OrderID, sum(Quantity) as howMany FROM `orders` NATURAL JOIN `customers` NATURAL JOIN `order_details` GROUP BY OrderID ORDER BY CompanyName, OrderID) AS table1 GROUP BY CompanyName ORDER BY `TotalQuantitiy`  DESC";

$ret_select = $db->select($sql_select);

var_dump($ret_select);