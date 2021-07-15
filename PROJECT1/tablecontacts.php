<?php
$link=mysqli_connect("localhost","root","","hotel");
if($link===false){
	echo "unable to connect".mysqli_connect_error();
	}
	$sql="CREATE TABLE contacts(Name CHAR(30) NOT NULL,phone_number VARCHAR(30) NOT NULL,email_address VARCHAR(50) NOT NULL PRIMARY KEY,subject CHAR(50) NOT NULL,message VARCHAR(90) NOT NULL)";
	if(mysqli_query($link,$sql))
	{
		echo "table contact created successfully";
	}
	else
	{
	echo "ERROR:could not able to execute".mysqli_error($link);}
	mysqli_close($link);
	?>