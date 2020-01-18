<?php

include("connect.php");
include("header.php");

?>
<h1>Ilość zamówionych produktów przez daną firmę</h1>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">Company Name</th>
        <th>TotalQuantitiy</th>

<?php
// Starting clock time in seconds
$start_time = microtime(true);
$sql_select = "SELECT CompanyName, sum(howMany) as TotalQuantitiy FROM (SELECT CompanyName, OrderID, sum(Quantity) as howMany FROM `orders` NATURAL JOIN `customers` NATURAL JOIN `order_details` GROUP BY OrderID ORDER BY CompanyName, OrderID) AS table1 GROUP BY CompanyName ORDER BY `TotalQuantitiy`  DESC";

$ret_select = $db->select($sql_select);
$start_num = 0;



foreach ($ret_select as $rw) {
        $start_num++;
?>

<tr>
              <td><?php echo $start_num; ?></td>
             <td><?php echo $rw['CompanyName']; ?></td>
            <td><?php echo $rw['TotalQuantitiy']; ?></td>
        </tr>

        <?php };  ?>
<?php
    // End clock time in seconds
    $end_time = microtime(true);

    // Calculate script execution time
    $execution_time = ($end_time - $start_time);
    $execution_time2 = $execution_time*1000;

    echo " Czas wykonywania zapytania = ".$execution_time2." milisekund";
?>

</table>

</div>

<?php include("footer.php"); ?>
