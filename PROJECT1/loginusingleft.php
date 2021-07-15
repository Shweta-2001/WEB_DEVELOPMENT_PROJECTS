<?php
$link=mysqli_connect("localhost","root","","hotel");
if($link===false)
{
	echo "unable to connect".mysqli_connect_error();
}
$email_id=mysqli_real_escape_string($link,$_POST['eid']);
$password=mysqli_real_escape_string($link,$_POST['pd']);
$sql="select * from agent where email_address='$email_id' and password='$password'";
if(mysqli_query($link,$sql))
{
	if($result=mysqli_query($link,$sql))
	{
		if(mysqli_num_rows($result)>0)
		{
			while($rows=mysqli_fetch_array($result))
			{
				if($rows['email_address']==$email_id && $rows['password']==$password)
				{
					echo "Logged in successfully";
					break;
				}
			}
			mysqli_free_result($result);
		}
		else
		{
			echo "Failed to logged in";
		}
	}
}
else
{
	echo "ERROR".mysqli_error($link);
}
mysqli_close($link);
?> 