<?php
$link=mysqli_connect("localhost","root","","hotel");
if($link===false){
	echo "unable to connect".mysqli_connect_error();
	}
	$sql="CREATE TABLE agent(Agency_name CHAR(30) NOT NULL,Agency_contact VARCHAR(30) NOT NULL,email_address VARCHAR(50) NOT NULL PRIMARY KEY,password VARCHAR(20) NOT NULL, phone_number VARCHAR(30) NOT NULL,city CHAR(30) NOT NULL,state CHAR(30) NOT NULL,country CHAR(30) NOT NULL )";
	if(mysqli_query($link,$sql))
	{
		echo "table agent created successfully";
	}
	else
	{
	echo "ERROR:could not able to execute".mysqli_error($link);}
	mysqli_close($link);
	?>