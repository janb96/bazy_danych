<?php
include("connect.php");
include("header.php");
?>
<table><a href='order-add.php'><button type='submit' class='btn btn-primary'>New order</button></a>
    </div></table></br>


<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">OrderID</th>
        <th>Order Date</th>
        <th>Delivery</th>
        <th>Ship Address</th>
        <th>City</th>
        <th>Region</th>
        <th>Postalcode</th>
        <th colspan="2" >Country</th></tr>

    <?php

    $sql_select = "SELECT * FROM orders ORDER BY OrderID DESC";
    $ret_select = $db->select($sql_select);
    $start_num = 0;
    foreach ($ret_select as $rw) {
        $start_num++;
        ?>

        <tr>
            <td><?php echo $start_num; ?></td>
            <td><?php echo $rw['OrderID']; ?></td>
            <td><?php echo $rw['OrderDate']; ?></td>
            <td><?php echo $rw['RequiredDate']; ?></td>
            <td><?php echo $rw['ShipAddress']; ?></td>
            <td><?php echo $rw['ShipCity']; ?></td>
            <td><?php echo $rw['ShipRegion']; ?></td>
            <td><?php echo $rw['ShipPostalCode']; ?></td>
            <td><?php echo $rw['ShipCountry']; ?></td>


            <td>
                <a class='btn btn-danger btn-sm' href="order-delete.php?del=<?php echo $rw['EmployeeID']; ?>" title="delete">Cancel</a>
            </td>
        </tr>
    <?php };  ?>
</table>

</div>