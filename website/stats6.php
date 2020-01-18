<?php

include("connect.php");

$sql_select = "SELECT EmployeeID, count(OrderID) as howMuch FROM `order_details` NATURAL JOIN `orders` NATURAL JOIN `employees` GROUP BY EmployeeID ORDER BY `howMuch`  DESC";

$ret_select = $db->select($sql_select);

var_dump($ret_select);

?>