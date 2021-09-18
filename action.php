<?php

include_once("config.php");


if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$email = $_POST['email'];

	
	if (empty($name) && empty($email)) {
		echo " Field is empty!";
	} else {
		$query = mysqli_query($mysqli,"INSERT INTO user(name, email) VALUES('$name', '$email')");

		// $result = mysqi_query($mysqi, $query);
		if ($query) {
			echo "Success";		
		} else {
			echo "Error";
		}

	}





}
?>

<a href="index.php">Home</a>