<?php
include("connect.php");
include("header.php");

$customers = $db->select("SELECT * FROM customers");

?>
<h1>Add Customer</h1>
<form method="post">
    <table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
        <tr>
            <td>CustomerID</td>
            <td><input type='text' name='CustomerID' maxlength='5'> </td>
        </tr>
        <tr>
            <td>Company Name</td>
            <td><input type='text' name='CompanyName' maxlength='40'> </td>
        </tr>
        <tr>
            <td>Contact Name</td>
            <td><input type='text' name='ContactName' maxlength='30'> </td>
        </tr>
        <tr>
            <td>Contact Title</td>
            <td><input type='text' name='ContactTitle' maxlength='30'>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type='text' name='Address' maxlength='60'>
            </td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type='text' name='City' maxlength='15'>
            </td>
        </tr>
        <tr>
            <td>Region</td>
            <td><input type='text' name='Region' maxlength='15'>
            </td>
        </tr>
        <td>Postal Code</td>
        <td><input type='text' name='PostalCode' maxlength='10'>
        </td>
        </tr>
        <tr>
            <td>Country</td>
            <td><input type='text' name='Country' maxlength='15'>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type='text' name='Phone' maxlength='24'>
            </td>
        </tr>
        <tr>
            <td>Fax</td>
            <td><input type='date' name='Fax' maxlength='24'>
            </td>
        </tr>

        <tr>
        <tr><td></td><td><button type='submit' class='btn btn-primary'>INSERT</button>
                <button type='reset' class='btn btn-danger btn-sm'>RESET</button></td></tr>
        </tr>
    </table>
</form>

<?php

if($_POST['CompanyName']) {

    $databaseData = $_POST;
    $flag = true;

    foreach ($databaseData as $el) {
        if ($el == "") {
            $flag = false;
        }
    }

    if($flag) {
        $customerID = $db->insert('customers', $_POST);
    } else {
        echo "<p>Nie wypelniles wszystkich pol</p>";
    }

}

if($customerID != NULL) {
    echo "<p>Dodano klienta</p>";
}

?>
</div>
</div>

<?php include("footer.php"); ?>


