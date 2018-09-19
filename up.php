<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "car";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

<<<<<<< HEAD
	for($x = 0; $x <= 100000; $x++){
=======
	for($x = 0; $x <= 10000; $x++){
>>>>>>> 30/8
		$companyname = array("Volvo", "BMW", "Toyota","Hyundai","TATA","Maruti Suzuki","Mahindra","Datsun","Renault","Audi","Ford","Volkswagen");

		$carname = array("Volvo XC90","BMW 5 Series 520d Luxury Line","Toyota Fortuner","Hyundai Verna","Tata Nexon","Maruti Suzuki Vitara Brezza","Mahindra Scorpio","Datsun Go+","Renault Kwid","Audi R8","Ford Freestyle","Volkswagen Polo GTI");

		$carn = mt_rand(0,count($carname)-1);
		$carc = mt_rand(0,count($companyname)-1);

		$price = mt_rand(100000,2500000);
		$year =  mt_rand(1990,2018);
		$driven =  mt_rand(1000,100000);

		$farray = array("Petrol","Diesel");
		$fuel_type =  mt_rand(0,1);

		$transmission = array("Automatic","Manual");
		$trans = mt_rand(0,1);

		$owner = array("First","Second","Third","Forth");
		$ow = mt_rand(0,3);

		$milage = mt_rand(15,30);
		$engine = mt_rand(1000,2000);

		$sn = array(4,6);
		$seats = mt_rand(0,1);
		
		$cc = array("White","Black","Dark Blue","Silver","Dark Grey","Red");
		$color = mt_rand(0,count($cc)-1);

		$gb = array(4,5,6);
		$gear_box = mt_rand(0,count($gb)-1);
		
		$st = array("Power steering","Four-wheel steering");
		$steering_type = mt_rand(0,count($st)-1);

		$bb = array("Disc","Drum");
		$front_brake_type = "Disc";

		$rear = mt_rand(0,1);
		
		$top_speed = mt_rand(175,250);

		$no_of_doors = 4;

		$engin = array("Petrol engine","Diesel engine");
		$engine_type = mt_rand(0,count($engin)-1);

		$fuel_supply_type="";
		
		if($engine_type==0){
			$fuel_supply_type="Petrol";
		}else{
			$fuel_supply_type="Diesel";
		}

		$img = "demo";
		
		if($companyname[$carc]=="Volvo"){
			$img = "11";
		}elseif ($companyname[$carc]=="BMW") {
			$img = "21";
		}elseif ($companyname[$carc]=="Toyota") {
			$img = "31";
		}elseif ($companyname[$carc]=="Hyundai") {
			$img = "41";
		}elseif ($companyname[$carc]=="TATA") {
			$img = "51";
		}elseif ($companyname[$carc]=="Maruti Suzuki") {
			$img = "61";
		}elseif ($companyname[$carc]=="Mahindra") {
			$img = "71";
		}elseif ($companyname[$carc]=="Datsun") {
			$img = "81";
		}elseif ($companyname[$carc]=="Renault") {
			$img = "91";
		}elseif ($companyname[$carc]=="Audi") {
			$img = "100";
		}elseif ($companyname[$carc]=="Ford") {
			$img = "110";
		}elseif ($companyname[$carc]=="Volkswagen") {
			$img = "120";
		}

		$a=$carname[$carc].'';
		$b=$companyname[$carc].'';
		$c=$price;
		$d=$farray[$fuel_type].'';
		$e=$transmission[$trans].'';
		$f=$owner[$ow].'';
		$g=$sn[$seats].'';
		$h=$cc[$color].'';
		$i=$gb[$gear_box].'';
		$j=$st[$steering_type].'';
		$k=$bb[$rear].'';
		$l=$engin[$engine_type].'';
		$sql ="INSERT INTO `car_info`( `name`, `company`, `price`, `year`, `driven`, `fuel_type`, `transmission`, `owner`, `milage`, `engine`, `seats`, `color`, `g_box`, `steering_type`, `front_brake_type`, `rear_brake_type`, `top_speed`, `no_of_doors`, `engine_type`, `fuel_supply_type`,`img`) VALUES ('".$a."','".$b."','".$c."','".$year."','".$driven."','".$d."','".$e."','".$f."','".$milage."','".$engine."','".$g."','".$h."','".$i."','".$j."','".$front_brake_type."','".$k."','".$top_speed."','".$no_of_doors."','".$l."','".$fuel_supply_type."','".$img."')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully".$x.'\n';
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		    break;
		}
	}