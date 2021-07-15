<?php
$link=mysqli_connect("localhost", "root","","hotel");
if($link===false)
{
	die("ERROR:could not connect".mysqli_connect_error());
}
$in=mysqli_real_escape_string($link,$_POST['dt1']);
$out=mysqli_real_escape_string($link,$_POST['dt2']);
$fname=mysqli_real_escape_string($link,$_POST['fname']);
$lname=mysqli_real_escape_string($link,$_POST['lname']);
$pno=mysqli_real_escape_string($link,$_POST['con']);
$email=mysqli_real_escape_string($link,$_POST['email']);
$city=mysqli_real_escape_string($link,$_POST['city']);
$std=mysqli_real_escape_string($link,$_POST['A']);
$me1=mysqli_real_escape_string($link,$_POST['B']);
$del=mysqli_real_escape_string($link,$_POST['C']);
$me2=mysqli_real_escape_string($link,$_POST['D']);
$clb=mysqli_real_escape_string($link,$_POST['E']);
$me3=mysqli_real_escape_string($link,$_POST['F']);
$pre=mysqli_real_escape_string($link,$_POST['G']);
$me4=mysqli_real_escape_string($link,$_POST['H']);
$sut=mysqli_real_escape_string($link,$_POST['I']);
$me5=mysqli_real_escape_string($link,$_POST['J']);

$sql="INSERT INTO booking(firstname,lastname,phone_number,email_address,city,check_in,check_out,stdRooms,no_of_memb1,delRooms,no_of_memb2,clbRooms,no_of_memb3,preRooms,no_of_memb4,sutRooms,no_of_memb5)VALUES('$fname' , '$lname' ,  '$pno' , '$email' , '$city' , '$in' , '$out' , '$std' , '$me1' ,'$del' , '$me2' ,'$clb' ,'$me3' , '$pre' , '$me4' , '$sut' ,'$me5' )";
if(mysqli_query($link,$sql))
	{
		echo "Booked successfully"."<br>";
	}else{
	echo " Please Fill Necessary Information ";
	}
	mysqli_close($link);
?>