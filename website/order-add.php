<?php
include("connect.php");
include("header.php");

$orders = $db->select("SELECT * FROM orders");

?>

<!-- Comment just to make commit pass throught -->

	<h1>Add new order</h1>
	<form method="post">
		<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
		<tr>
			<td>Customer Name</td>
			<td><input type='text' name='FirstName' maxlength='25'> </td>
		</tr>
		<tr>
			<td>Customer Surname</td>
			<td><input type='text' name='LastName'> </td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type='text' name='Title'>
			</td>
		</tr>
		<tr>
			<td>Title Of Courtesy</td>
			<td><input type='text' name='TitleOfCourtesy'>
			</td>
		</tr>
		<tr>
			<td>Home Phone</td>
			<td><input type='text' name='HomePhone'>
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type='text' name='Address'>
			</td>
		</tr>
			<td>City</td>
			<td><input type='text' name='City'>
			</td>
		</tr>
		<tr>
			<td>Country</td>
			<td><input type='text' name='Country'>
			</td>
		</tr>
		<tr>
			<td>Notes</td>
			<td><input type='text' name='Notes'>
			</td>
		</tr>
		<tr>
			<td>BirthDate</td>
			<td><input type='date' name='BirthDate'>
			</td>
		</tr>
		<tr>
			<td>HireDate</td>
			<td><input type='date' name='HireDate'>
			</td>
		</tr>
		<tr>
			<td>ReportsTo</td>
			<td>
				<select name='ReportsTo'>
					<?php
						foreach($orders as $order) {
							echo '<option value="'.$order['EmployeeID'].'">'.$order['FirstName'].' '.$order['LastName'].'</option>';
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
		<tr><td></td><td><button type='submit' class='btn btn-primary'>INSERT</button>
			<button type='reset' class='btn btn-danger btn-sm'>RESET</button></td></tr>
		</tr>
		</table>
	</form>

<?php

        if($_POST['FirstName']) {

        	$databaseData = $_POST;
        	$flag = true;

        	foreach ($databaseData as $el) {
        		if ($el == "") {
        			$flag = false;
        		}
        	}

        	if($flag) {
        		$orderID = $db->insert('orders', $_POST);
        	} else {
        		echo "<p>Uzupelnij brakujace pola!</p>";
        	}

        }

        if($orderID > 0) {
        	echo "<p>Dodano zamowienie!</p>";
        }

?>
</div>
</div>
<?php include("footer.php"); ?>

