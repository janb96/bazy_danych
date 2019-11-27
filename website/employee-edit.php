<?php

include("connect.php");
include("header.php");

$employeeID = $_GET['edit'];

$ret_select = $db->select("SELECT * FROM Employees WHERE EmployeeID=:employeeID",
	[
		"employeeID" => $employeeID
	]
);


foreach ($ret_select as $rw) {

?>
	<form method="post" >
	<table cellpadding='2' cellspacing='0' border='0' class='table table-striped table-bordered' >
	
	<tr>
	<td>First Name</td><td><input type="text" name="FirstName" value="<?php echo $rw['FirstName']; ?>"></td></tr>
	<td>Last Name</td><td><input type="text" name="LastName" value="<?php echo $rw['LastName']; ?>"></td></tr>
	<td>Title</td><td><input type="text" name="Title" value="<?php echo $rw['Title']; ?>"></td></tr>
	<td>Title Of Courtesy</td><td><input type="text" name="TitleOfCourtesy" value="<?php echo $rw['TitleOfCourtesy']; ?>"></td></tr>
	<td>Home Phone</td><td><input type="text" name="HomePhone" value="<?php echo $rw['HomePhone']; ?>"></td></tr>
	<td>Address</td><td><input type="text" name="Address" value="<?php echo $rw['Address']; ?>"></td></tr>
	<td>City</td><td><input type="text" name="City" value="<?php echo $rw['City']; ?>"></td></tr>
	<td>Country</td><td><input type="text" name="Country" value="<?php echo $rw['Country']; ?>"></td></tr>
    </tr>
	<tr>
	<td><td>
	<button type='submit' class='btn btn-primary'>UPDATE</button>          
    </tr>
	</form>
	</table>
	<?php

        if($_POST != $rw){
        	$updateResult = $db->update("Employees", $_POST, "`EmployeeID`=:employeeID", ['employeeID' => $employeeID]);
        	$linkToRedirect = "/employee-list.php";
        	$_SESSION['redirect'] = $linkToRedirect;
        }
       }
    ?>
		</div>
	</div>
<?php include("footer.php"); ?>