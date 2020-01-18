<?php

include("connect.php");
include("header.php");

$productName = $_GET['edit'];

$ret_select = $db->select("SELECT * FROM products WHERE ProductName=:productName",
    [
        'productName' => $productName
    ]
);


foreach ($ret_select as $rw) {

    ?>
    <form method="post" >
        <table cellpadding='2' cellspacing='0' border='0' class='table table-striped table-bordered' >

            <tr>

            <td>Product Name</td><td><input type="text" name="ProductName" maxlength='40' value="<?php echo $rw['ProductName']; ?>"></td></tr>
            <td>Supplier ID</td><td><input type="number" name="SupplierID" min="0" value="<?php echo $rw['SupplierID']; ?>"></td></tr>
            <td>Category ID</td><td><input type="number" name="CategoryID" min="0" value="<?php echo $rw['CategoryID']; ?>"></td></tr>
            <td>Quantity Per Unit</td><td><input type="text" name="QuantityPerUnit" maxlength='20' value="<?php echo $rw['QuantityPerUnit']; ?>"></td></tr>
            <td>Unit Price (0-10)</td><td><input type="number" name="UnitPrice" min="0" value="<?php echo $rw['UnitPrice']; ?>"></td></tr>
            <td>Units In Stock</td><td><input type="number" name="UnitsInStock" min="0" value="<?php echo $rw['UnitsInStock']; ?>"></td></tr>
            <td>Units On Order</td><td><input type="number" name="UnitsOnOrder" min="0" value="<?php echo $rw['UnitsOnOrder']; ?>"></td></tr>
            <td>Reorder Level</td><td><input type="number" name="ReorderLevel" min="0" value="<?php echo $rw['ReorderLevel']; ?>"></td></tr>
            <td>Discontinued</td><td><input type="number" name="Discontinued" min="0" max="1" value="<?php echo $rw['Discontinued']; ?>"></td></tr>
            </tr>
            <tr>
                <td><td>
                    <button type='submit' class='btn btn-primary'>UPDATE</button>
            </tr>
    </form>
    </table>
    <?php

    if($_POST != $rw){
        $updateResult = $db->update("products", $_POST, "`ProductName`=:productName", ['productName' => $productName]);
        $linkToRedirect = "/product-list.php";
        $_SESSION['redirect'] = $linkToRedirect;
    }
}
?>
</div>
</div>

