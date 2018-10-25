<?php
	include_once("database.php");

	$user = $_COOKIE["username"];
	$fname = $user . "_";
	//echo $fname;
	$num = mt_rand(0,999999);
	$fname.=$num;

	// if(isset($_FILES['image'])){
      	// $errors= array();
      	// $file_name = $_FILES['image']['name'];
      	// $file_size = $_FILES['image']['size'];
      	// $file_tmp = $_FILES['image']['tmp_name'];
      	// $file_type = $_FILES['image']['type'];
      	// $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      

      	// $expensions= array("jpeg","jpg","png");
      
      	// if(in_array($file_ext,$expensions)=== false){
       //   	$errors[]="extension not allowed, please choose a JPEG or PNG file.";
      	// }
      
      	// if($file_size > 2097152) {
       //   	$errors[]='File size must be excately 2 MB';
      	// }
      
      	// if(empty($errors)==true) {
      	// 	$fname.=".".$file_ext;
       //   	move_uploaded_file($file_tmp,"img/user/".$file_name);
       //   	echo "Success";
      	// }else{
       //   	print_r($errors);
      	// }
		$fname.=".jpg";
   	
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

		echo $fuel;

		if($company=="" || $model=="" || $fuel="" || $kmss="" || $year=="" || $state=="" || $city="" || $pno="" || $detail="" || $price=""){
			echo "f";
		}else{
			echo $fuel . $kmss;			
			$sql = "INSERT INTO `car_info`(`sold`, `company`, `model`, `fuel`, `year`, `kms`, `state`, `city`, `details`, `price`, `phone_number`, `username`, `img`) VALUES ('false','$company','$model','$fuel','$year','$kmss','$state','$city','$detail','$price','$pno','$user','$fname')";

			if ($conn->query($sql) === TRUE) {
			    echo "done";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
	// }else{
	// 	echo  "image not set";
	// }
	$conn->close();
?>