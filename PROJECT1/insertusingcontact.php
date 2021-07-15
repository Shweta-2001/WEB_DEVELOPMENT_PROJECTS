<?php
$link=mysqli_connect("localhost", "root","","hotel");
if($link===false)
{
	die("ERROR:could not connect".mysqli_connect_error());
}
$name=mysqli_real_escape_string($link,$_POST['name']);
$phno=mysqli_real_escape_string($link,$_POST['phno']);
$email=mysqli_real_escape_string($link,$_POST['email']);
$sub=mysqli_real_escape_string($link,$_POST['sub']);
$msg=mysqli_real_escape_string($link,$_POST['msg']);

$sql="INSERT INTO contacts(Name,email_address,phone_number,subject,message)VALUES('$name' , '$email' , '$phno' , '$sub' , '$msg' )";
if(mysqli_query($link,$sql))
	{
		echo "Sent Successfully"."<br>";
	}else{
	echo "Plz Fill Complete Details";
	}
	mysqli_close($link);
?>