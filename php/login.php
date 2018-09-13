<?php 
	include_once("database.php");

	$username = $_POST["username"];
	$password = $_POST["password"];

	//echo $username;
	$sql = "SELECT username,password FROM userdata where username='".$username."' and password ='".$password."'";
	$result = $conn->query($sql);

	$flag=-1;
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        if ($username == $row["username"] && $password == $row["password"]) {
	        	echo "found";
	        	setcookie("username",$username,time() + (86400 * 30), "/");
	        	$flag=1;
	        	break;
	        }
	    }
	    if ($flag==-1) {
	    	echo "no";	
	    }
	    
	} else {
	    echo "no";
	}
	$conn->close();
?>