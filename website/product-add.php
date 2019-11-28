<?php
include("connect.php");
include("header.php");

$products = $db->select("SELECT * FROM products");

?>
<h1>Add Product</h1>
<form method="post">
    <table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
        <tr>
            <td>Product Name</td>
            <td><input type='text' name='ProductName' maxlength='25'> </td>
        </tr>
        <tr>
            <td>SupplierID</td>
            <td><input type='number' name='SupplierID' min="0"> </td>
        </tr>
        <tr>
            <td>CategoryID</td>
            <td><input type='number' name='CategoryID'> </td>
        </tr>
        <tr>
            <td>Quantity Per Unit</td>
            <td><input type='text' name='QuantityPerUnit'>
            </td>
        </tr>
        <tr>
            <td>Unit Price</td>
            <td><input type='number' name='UnitPrice' min="0">
            </td>
        </tr>
        <tr>
            <td>Units In Stock</td>
            <td><input type='number' name='UnitsInStock' min="0">
            </td>
        </tr>
        <tr>
            <td>Units On Order</td>
            <td><input type='number' name='UnitsOnOrder' min="1">
            </td>
        </tr>
        <td>Reorder Level</td>
        <td><input type='number' name='ReorderLevel' min="0">
        </td>
        </tr>
        <tr>
            <td>Discontinued</td>
            <td><input type='number' name='Discontinued' min="0" max="1">
            </td>
        </tr>

        <tr>
        <tr><td></td><td><button type='submit' class='btn btn-primary'>INSERT</button>
                <button type='reset' class='btn btn-danger btn-sm'>RESET</button></td></tr>
        </tr>
    </table>
</form>

<?php

if($_POST['ProductName']) {

    $databaseData = $_POST;
    $flag = true;

    foreach ($databaseData as $el) {
        if ($el == "") {
            $flag = false;
        }
    }

    if($flag) {
        $productName = $db->insert('products', $_POST);
    } else {
        echo "<p>Nie wypelniles wszystkich pol</p>";
    }

}

if($productName != NULL) {
    echo "<p>Dodano produkt</p>";

}

?>
</div>
</div>



