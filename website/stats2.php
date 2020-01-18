<?php

include("connect.php");
include("header.php");

?>
<h1>Ilość produktów w konkretnym zamówieniu</h1>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">OrderID</th>
        <th>sum(Quantity)</th>

<?php

$sql_select = "SELECT OrderID, sum(Quantity) FROM `order_details` GROUP BY OrderID ORDER BY `sum(Quantity)`  DESC";

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

</table>

</div>

