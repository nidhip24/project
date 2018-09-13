<?php
	include_once("database.php");

	$username = $_POST["uname"];
	$password = $_POST["pass"];
	$email = $_POST["email"];
	$name = $_POST["name"];

	$sql = "INSERT INTO `userdata`(`username`, `password`, `email`, `name`) VALUES ('".$username."','".$password."','".$email."','".$name."')";

	if ($conn->query($sql) === TRUE) {
	    echo "done";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	?>