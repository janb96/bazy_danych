<?php

include("connect.php");

$companyName = $_GET['del'];

$delete = $db->delete("customers", "`CompanyName`=:companyName",
    [
        'companyName' => $companyName
    ]
);

$url = '/customer-list.php';
header('Location: '.$url);

?>
