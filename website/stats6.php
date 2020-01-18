<?php

include("connect.php");
include("header.php");

?>
<h1>Ilość zamówień do konkretnych miast</h1>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">ShipCity</th>
        <th>count(OrderID)</th>

<?php

// Starting clock time in seconds
$start_time = microtime(true);

$sql_select = "SELECT ShipCity, count(OrderID) as howMuch FROM `orders` GROUP BY ShipCity ORDER BY `howMuch` DESC";

$ret_select = $db->select($sql_select);

$start_num = 0;

foreach ($ret_select as $rw) {
        $start_num++;
?>

<tr>
              <td><?php echo $start_num; ?></td>
             <td><?php echo $rw['ShipCity']; ?></td>
            <td><?php echo $rw['howMuch']; ?></td>
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