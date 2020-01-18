<?php

  session_start();

  if(isset($_SESSION['redirect'])) {
    $url = $_SESSION['redirect'];
    unset($_SESSION['redirect']);
    header("Location: ".$url);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>BAZY DANYCH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
        body {
            padding-top: 60px;
        }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">


    <script src="../assets/js/html5shiv.js"></script>



    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="active"><a href="index.php">Main</a></li>
                    <li class="active"><a href="employee-list.php">Employees</a></li>
                    <li class="active"><a href="customer-list.php">Customers</a></li>
                    <li class="active"><a href="product-list.php">Products</a></li>
                    <li class="active"><a href="order-list.php">Orders</a></li>
                    <li class="active"><a href="stats.php">Stats1</a></li>
                    <li class="active"><a href="stats2.php">Stats2</a></li>
                    <li class="active"><a href="stats3.php">Stats3</a></li>
                    <li class="active"><a href="stats4.php">Stats4</a></li>
                    <li class="active"><a href="stats5.php">Stats5</a></li>
                    <li class="active"><a href="stats6.php">Stats6</a></li>
                    <li class="active"><a href="stats7.php">Stats7</a></li>
                    <li class="active"><a href="stats8.php">Stats8</a></li>
                    <li class="active"><a href="stats9.php">Stats9</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">