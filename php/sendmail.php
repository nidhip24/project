<?php

	include_once("database.php");

	$id = $_POST["id"];
	$user = $_POST["user"];

	$to = "nidhipkathiriya@gmail.com";
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

	//echo $username;
	$sql = "SELECT `email`,`username` FROM `userdata` WHERE userdata='$username'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        if ($username == $row["username"]) {
	        	$to = $row["email"];
	        	break;
	        }
		}
	}

	
	//$response = http_get("https://nidhip.000webhostapp.com/car/php/sendmail.php?to=".$to, array("timeout"=>1), $info);
	// create curl resource 
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "https://nidhip.000webhostapp.com/car/php/sendmail.php?to=".$to); 

        //return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // close curl resource to free up system resources 
        curl_close($ch);
?>