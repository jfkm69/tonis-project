<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'tonis';

	$conn = mysqli_connect("$servername", "$username", "$password", "$database") or die(mysql_error());

	// if (!$conn) {
	// 	die("Connection failed: " . mysqli_connect_error());
	// }
	echo "Connection successful";

	//remember to enter the correct type in the post square brackets
	// if (isset ($_POST['submit'])){
		$itemcode = $_POST['itemcode'];
		$itemname = $_POST['itemname'];
		$itemcost = $_POST['itemcost'];

		$sql = "INSERT INTO specialordermenu (itemcode, itemname, itemcost) values ('$itemcode', '$itemname', '$itemcost')";
		$result = mysql_query($sql);

		if($result){
			echo "Entry successful!";
		} else {
			"Entry failed. Please try again."
		}
	// }
	mysql_close($connection);
?>