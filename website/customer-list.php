<?php include("connect.php") ?>
<?php include("header.php"); ?>

<table><a href='insert.php'><button type='submit' class='btn btn-primary'>INSERT DATA</button></a>
    </div></table></br>
<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
    <tr><th>No</th>
        <th width="125">Company Name</th>
        <th>Contact Name</th>
        <th>Contact Title</th>
        <th>Address</th>
        <th>City</th>
        <th>Region</th>
        <th>PostalCode</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Fax</th>
        <th colspan="2" >Option</th></tr>
    <?php

    $sql_select = "SELECT CompanyName, ContactName, ContactTitle, Address, City, Region, PostalCode, Country, Phone, Fax FROM Customers ORDER BY CustomerID ASC";
    $ret_select = $db->select($sql_select);
    $start_num = 0;

    foreach ($ret_select as $rw) {
        $start_num++;
        ?>

        <tr>
            <td><?php echo $start_num; ?></td>
            <td><?php echo $rw['CompanyName']; ?></td>
            <td><?php echo $rw['ContactName']; ?></td>
            <td><?php echo $rw['ContactTitle']; ?></td>
            <td><?php echo $rw['Address']; ?></td>
            <td><?php echo $rw['City']; ?></td>
            <td><?php echo $rw['Region']; ?></td>
            <td><?php echo $rw['PostalCode']; ?></td>
            <td><?php echo $rw['Country']; ?></td>
            <td><?php echo $rw['Phone']; ?></td>
            <td><?php echo $rw['Fax']; ?></td>



            <td> <a class='btn btn-info btn-sm' href="edit.php?edit=<?php echo $rw['EmployeeID']; ?>" title="edit">Edit</a>
                <a class='btn btn-danger btn-sm' href="delete.php?del=<?php echo $rw['EmployeeID']; ?>" title="delete">Delete</a>
            </td>
        </tr>
    <?php };  ?>
</table>

</div>
