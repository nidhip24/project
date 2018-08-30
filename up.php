<?php
	$companyname = array("Volvo", "BMW", "Toyota","Hyundai","TATA","Maruti Suzuki","Mahindra","Datsun","Renault","Audi","Ford","Volkswagen");

	$carname = array("Volvo XC90","BMW 5 Series 520d Luxury Line","Toyota Fortuner","Hyundai Verna","Tata Nexon","Maruti Suzuki Vitara Brezza","Mahindra Scorpio","Datsun Go+","Renault Kwid","Audi R8","Ford Freestyle","Volkswagen Polo GTI");

	$price = mt_rand(100000,2500000);
	$year =  mt_rand(1990,2018);
	$driven =  mt_rand(1000,100000);

	$farray = array("Petrol","Diesel");
	$fuel_type =  mt_rand(1,2);

	$transmission = array("Automatic","Manual");
	$trans = mt_rand(1,2);

	$owner = array("First","Second","Third","Forth");
	$ow = mt_rand(1,4);

	$milage = mt_rand(15,30);
	$engine = mt_rand(1000,2000);
	