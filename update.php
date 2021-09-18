<?php

include_once("config.php");


if (isset($_POST['update'])) {
	$id = $_POST['user_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];


	if (empty($name) && empty($email)) {
		echo " Field is empty!";
	} else {
		$query = mysqli_query($mysqli,"UPDATE user SET name='$name', email='$email' WHERE id='$id'");
		header("Location: index.php");

		// // $result = mysqi_query($mysqi, $query);
		// if ($query) {
		// 	echo "Success";		
		// } else {
		// 	echo "Error";
		// }

	}
}