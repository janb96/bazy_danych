<?php

include("connect.php");
include("header.php");

?>
<h1>Ilość zamówień dokonanych przez daną firmę</h1>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">CustomerID</th>
        <th>CompanyName</th>
        <th>count(OrderID)</th>

<?php

// Starting clock time in seconds
$start_time = microtime(true);
$sql_select = "SELECT CustomerID, CompanyName, count(OrderID) FROM `customers` NATURAL JOIN `orders` NATURAL JOIN `order_details` GROUP BY OrderID ORDER BY `count(OrderID)`  DESC LIMIT 10";

// End clock time in seconds
    $end_time = microtime(true);
$ret_select = $db->select($sql_select);
$start_num = 0;

foreach ($ret_select as $rw) {
        $start_num++;
?>

<tr>
              <td><?php echo $start_num; ?></td>
             <td><?php echo $rw['CustomerID']; ?></td>
            <td><?php echo $rw['CompanyName']; ?></td>
            <td><?php echo $rw['count(OrderID)']; ?></td>
        </tr>

        <?php };  ?>

<?php


    // Calculate script execution time
    $execution_time = ($end_time - $start_time);
    $execution_time2 = $execution_time*1000000;

    echo " Czas wykonywania zapytania = ".$execution_time2." mikrosekund";
?>

</table>

</div>

<?php include("footer.php"); ?>

