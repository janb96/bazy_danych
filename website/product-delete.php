<?php

include("connect.php");

$productName = $_GET['del'];

$delete = $db->delete("products", "`ProductName`=:productName",
    [
        'productName' => $productName
    ]
);

$url = '/product-list.php';
header('Location: '.$url);

?>
