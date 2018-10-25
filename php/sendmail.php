<?php

	include_once("database.php");

	$id = $_POST["id"];
	$user = $_POST["user"];

	if($id=="" || $user==""){
		echo "booo";
	}else{
		$sql = "INSERT INTO `ccrequest`(`id`, `user`, `details`, `status`) VALUES ('$id','$user','','pending')";

		if ($conn->query($sql) === TRUE) {
		    echo "done";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>