<?php

include("connect.php");
include("header.php");

$companyName = $_GET['edit'];

$ret_select = $db->select("SELECT * FROM customers WHERE CompanyName=:companyName",
    [
        'companyName' => $companyName
    ]
);


foreach ($ret_select as $rw) {

    ?>
    <form method="post" >
        <table cellpadding='2' cellspacing='0' border='0' class='table table-striped table-bordered' >

            <tr>
                <td>CustomerID</td><td><input type="text" name="CustomerID" value="<?php echo $rw['CustomerID']; ?>"></td></tr>
                <td>Company Name</td><td><input type="text" name="CompanyName" value="<?php echo $rw['CompanyName']; ?>"></td></tr>
            <td>Contact Name</td><td><input type="text" name="ContactName" value="<?php echo $rw['ContactName']; ?>"></td></tr>
            <td>Contact Title</td><td><input type="text" name="ContactTitle" value="<?php echo $rw['ContactTitle']; ?>"></td></tr>
            <td>Address</td><td><input type="text" name="Address" value="<?php echo $rw['Address']; ?>"></td></tr>
            <td>City</td><td><input type="text" name="City" value="<?php echo $rw['City']; ?>"></td></tr>
            <td>Region</td><td><input type="text" name="Region" value="<?php echo $rw['Region']; ?>"></td></tr>
            <td>Postal Code</td><td><input type="text" name="PostalCode" value="<?php echo $rw['PostalCode']; ?>"></td></tr>
            <td>Country</td><td><input type="text" name="Country" value="<?php echo $rw['Country']; ?>"></td></tr>
            <td>Phone</td><td><input type="text" name="Phone" value="<?php echo $rw['Phone']; ?>"></td></tr>
            <td>Fax</td><td><input type="text" name="Fax" value="<?php echo $rw['Fax']; ?>"></td></tr>
            </tr>
            <tr>
                <td><td>
                    <button type='submit' class='btn btn-primary'>UPDATE</button>
            </tr>
    </form>
    </table>
    <?php

    if($_POST != $rw){
        $updateResult = $db->update("customers", $_POST, "`CompanyName`=:companyName", ['companyName' => $companyName]);
        $linkToRedirect = "/customer-list.php";
        $_SESSION['redirect'] = $linkToRedirect;
    }
}
?>
</div>
</div>
