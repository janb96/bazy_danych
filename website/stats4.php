<?php

include("connect.php");

$sql_select = "SELECT ProductID, sum(Quantity) as howMuch FROM `order_details` GROUP BY ProductID ORDER BY `howMuch` DESC";

$ret_select = $db->select($sql_select);

var_dump($ret_select);