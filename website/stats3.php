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

$sql_select = "SELECT CustomerID, CompanyName, count(OrderID) FROM `customers` NATURAL JOIN `orders` NATURAL JOIN `order_details` GROUP BY OrderID ORDER BY `count(OrderID)`  DESC LIMIT 10";

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

</table>

</div>

