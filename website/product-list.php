<?php include("connect.php") ?>
<?php include("header.php"); ?>

<table><a href='product-add.php'><button type='submit' class='btn btn-primary'>Add new product</button></a>
    </div></table></br>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">Product Name</th>
        <th>SupplierID</th>
        <th>CategoryID</th>
        <th>Quantity Per Unit</th>
        <th>Unit Price</th>
        <th>Units In Stock</th>
        <th>Units On Order</th>
        <th>Reorder Level</th>
        <th>Discontinued</th>
        <th colspan="2" >Option</th></tr>
    <?php

    $sql_select = "SELECT ProductName, SupplierID, CategoryID, QuantityPerUnit, UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued FROM Products ORDER BY ProductName ASC";
    $ret_select = $db->select($sql_select);
    $start_num = 0;

    foreach ($ret_select as $rw) {
        $start_num++;
        ?>

        <tr>
            <td><?php echo $start_num; ?></td>
            <td><?php echo $rw['ProductName']; ?></td>
            <td><?php echo $rw['SupplierID']; ?></td>
            <td><?php echo $rw['CategoryID']; ?></td>
            <td><?php echo $rw['QuantityPerUnit']; ?></td>
            <td><?php echo $rw['UnitPrice']; ?></td>
            <td><?php echo $rw['UnitsInStock']; ?></td>
            <td><?php echo $rw['UnitsOnOrder']; ?></td>
            <td><?php echo $rw['ReorderLevel']; ?></td>
            <td><?php echo $rw['Discontinued']; ?></td>



            <td> <a class='btn btn-info btn-sm' href="product-edit.php?edit=<?php echo $rw['ProductName']; ?>" title="edit">Edit</a>
                <a class='btn btn-danger btn-sm' href="product-delete.php?del=<?php echo $rw['ProductName']; ?>" title="delete">Delete</a>
            </td>
        </tr>
    <?php };  ?>
</table>

</div>