<?php
$link=mysqli_connect("localhost","root","");
if($link===false){
	echo "unable to connect".mysqli_connect_error();
	}
	$sql="CREATE DATABASE hotel";
	if(mysqli_query($link,$sql))
	{
		echo "created database hotel";
	}
	else
	{
	echo "error".mysqli_error($link);}
	mysqli_close($link);
	?>