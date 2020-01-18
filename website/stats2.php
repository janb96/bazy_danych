<?php

include("connect.php");
include("header.php");

?>
<h1>Ilość produktów w konkretnym zamówieniu</h1>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">OrderID</th>
        <th>Ilość produktów</th>

<?php

// Starting clock time in seconds
$start_time = microtime(true);

$sql_select = "SELECT OrderID, sum(Quantity) FROM `order_details` GROUP BY OrderID ORDER BY `sum(Quantity)`  DESC";

// End clock time in seconds
$end_time = microtime(true);
$ret_select = $db->select($sql_select);
$start_num = 0;

foreach ($ret_select as $rw) {
        $start_num++;
?>

<tr>
              <td><?php echo $start_num; ?></td>
             <td><?php echo $rw['OrderID']; ?></td>
            <td><?php echo $rw['sum(Quantity)']; ?></td>
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

