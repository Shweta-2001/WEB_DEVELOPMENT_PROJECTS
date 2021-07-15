<?php
$link=mysqli_connect("localhost","root","","hotel");
if($link===false){
	echo "unable to connect".mysqli_connect_error();
	}
	$sql="CREATE TABLE booking(firstname CHAR(30) NOT NULL,lastname CHAR(30) NOT NULL,phone_number VARCHAR(30) NOT NULL,email_address VARCHAR(50) NOT NULL PRIMARY KEY,city CHAR(30) NOT NULL,check_in VARCHAR(30) NOT NULL,check_out VARCHAR(30) NOT NULL,stdRooms INT(30) NOT NULL,no_of_memb1 INT(30) NOT NULL,delRooms INT(30) NOT NULL,no_of_memb2 INT(30) NOT NULL,clbRooms INT(30) NOT NULL,no_of_memb3 INT(30) NOT NULL,preRooms INT(30) NOT NULL,no_of_memb4 INT(30) NOT NULL,sutRooms INT(30) NOT NULL,no_of_memb5 INT(30) NOT NULL)";
	if(mysqli_query($link,$sql))
	{
		echo "table booking created successfully";
	}
	else
	{
	echo "ERROR:could not able to execute".mysqli_error($link);}
	mysqli_close($link);
	?>