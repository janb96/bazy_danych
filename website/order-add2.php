<?php
include("connect.php");
include("header.php");

?>
	<h1>Add Order</h1>
	<form method="post">
		<table cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered' >
                <tr>
                        <td>CustomerID</td>
                        <td>
                                <select name="CustomerID">
                                        <?php 

                                                $result = $db->select("SELECT * FROM customers");
                                                foreach($result as $el) {
                                                        echo '<option value="'.$el["CustomerID"].'">'.$el["CompanyName"].'</option>';
                                                }

                                        ?>
                                </select>
                        </td>
                </tr>

                <tr>
                        <td>ProductID</td>
                        <td>
                                <select name="ProductID">
                                        <?php 

                                                $result = $db->select("SELECT * FROM products");
                                                foreach($result as $el) {
                                                        echo '<option value="'.$el["ProductID"].'">'.$el["ProductName"].'</option>';
                                                }

                                        ?>
                                </select>
                        </td>
                </tr>

                <tr>
                        <td>EmployeeID</td>
                        <td>
                                <select name="EmployeeID">
                                        <?php 

                                                $result = $db->select("SELECT * FROM employees");
                                                foreach($result as $el) {
                                                        echo '<option value="'.$el["EmployeeID"].'">'.$el["LastName"].'</option>';
                                                }

                                        ?>
                                </select>
                        </td>
                </tr>
		<tr><td></td><td><button type='submit' class='btn btn-primary'>INSERT</button>
			<button type='reset' class='btn btn-danger btn-sm'>RESET</button></td></tr>
		</tr>
		</table>
	</form>

<?php

        if($_POST['CustomerID']) {

        	$databaseData = $_POST;
        	$flag = true;

        	foreach ($databaseData as $el) {
        		if ($el == "") {
        			$flag = false;
        		}
        	}

        	if($flag) {
        		$orderCounter = $db->insert('order_data_processing', $_POST);
        	} else {
        		echo "<p>Nie wypelniles wszystkich pol</p>";
        	}

        }

        if($orderCounter > 0) {
        	echo "<p>Zamowienie zostalo dodane!</p>";
        }

?>
</div>
</div>
<?php include("footer.php"); ?>