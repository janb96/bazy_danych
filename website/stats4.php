<?php

include("connect.php");
include("header.php");

?>

<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">ProductID</th>
        <th>sum(Quantity)</th>

<?php

$sql_select = "SELECT ProductID, sum(Quantity) as howMuch FROM `order_details` GROUP BY ProductID ORDER BY `howMuch` DESC";

$ret_select = $db->select($sql_select);

$start_num = 0;

foreach ($ret_select as $rw) {
        $start_num++;
?>

<tr>
              <td><?php echo $start_num; ?></td>
             <td><?php echo $rw['ProductID']; ?></td>
            <td><?php echo $rw['howMuch']; ?></td>

        </tr>

        <?php };  ?>

</table>

</div>

