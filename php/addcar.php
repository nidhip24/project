<?php
	include_once("database.php");

	$user = $_COOKIE["username"];
	$fname = $user . "_";

	define ('SITE_ROOT', realpath(dirname(__FILE__)));

	$target_dir = "C:/Users/nidhi/Desktop/img/";
	$target_file = $target_dir . $fname .basename($_FILES["images"]["name"]);
	$fname = $fname .basename($_FILES["images"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["images"]["tmp_name"]);
	    if($check !== false) {
	        //echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        //echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    //echo "try again";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
	    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    //echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["images"]["tmp_name"], "".$target_file)) {
	        //echo "The file ". basename( $_FILES["images"]["name"]). " has been uploaded.";
	        $company = $_POST["company"];
			$model = $_POST["model"];
			$fuel = $_POST["fuel"];
			$kmss = $_POST["kilom"];
			$year = $_POST["year"];
			$state = $_POST["state"];
			$city = $_POST["city"];
			$detail = $_POST["detail"];
			$pno = $_POST["pno"];
			$price = $_POST["price"];
			$user = $_COOKIE["username"];

			$sql = "INSERT INTO `car_info`(`sold`, `company`, `model`, `fuel`, `year`, `kms`, `state`, `city`, `details`, `price`, `phone_number`, `username`, `img`) VALUES ('false','$company','$model','$fuel','$year','$kmss','$state','$city','$detail','$price','$pno','$user','$fname')";
			//echo $fuel." ".$company." ".$model." ".$kmss." ".$year." ".$state." ".$city." ".$detail." ".$pno." ".$price;

			if($company=="" || $model=="" || $fuel="" || $kmss="" || $year=="" || $state=="" || $city="" || $pno="" || $detail="" || $price=""){
				echo "f";
			}else{			
				if ($conn->query($sql) === TRUE) {
				    echo "done";
				} else {
				    echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
	    } else {
	    	$uploadOk = 0;
	        //echo "Sorry, there was an error uploading your file.";
	    }
	}
   	
		
	// }else{
	// 	echo  "image not set";
	// }
	$conn->close();
?>