<?php
$link=mysqli_connect("localhost", "root","","hotel");
if($link===false)
{
	die("ERROR:could not connect".mysqli_connect_error());
}
$Aname=mysqli_real_escape_string($link,$_POST['an']);
$Acontact=mysqli_real_escape_string($link,$_POST['ac']);
$email_address=mysqli_real_escape_string($link,$_POST['email']);
$phno=mysqli_real_escape_string($link,$_POST['pn']);
$Acountry=mysqli_real_escape_string($link,$_POST['ctry']);
$Astate=mysqli_real_escape_string($link,$_POST['st']);
$Acity=mysqli_real_escape_string($link,$_POST['ct']);
$password=mysqli_real_escape_string($link,$_POST['pwd']);

$sql="INSERT INTO agent(Agency_name,Agency_contact,email_address,password,phone_number,city,state,country)VALUES('$Aname' , '$Acontact' , '$email_address' , '$password' , '$phno' , '$Acity' , '$Astate' , '$Acountry' )";
if(mysqli_query($link,$sql))
	{
		echo "Registered successfully"."<br>";
	}else{
	echo "Plz Fill complete Details";
	}
	mysqli_close($link);
?>