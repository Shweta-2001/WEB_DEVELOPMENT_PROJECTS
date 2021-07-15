<html>
<head>
<body bgcolor="lightgreen">
<?php
$link=mysqli_connect("localhost","root","","hotel");
if($link===false){
	die("ERROR:could not connect".mysqli_connect_error());
	}
$sql="SELECT * FROM booking";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>Firstname</th>";  
		echo "<th>Lastname</th>";   
		echo "<th>phone_number</th>";
		echo "<th>email_address</th>"; 
		echo "<th>city</th>"; 
		echo "<th>Check-in</th>"; 
		echo "<th>Check-out</th>"; 
		echo "<th>Number of Standard Rooms</th>"; 
		echo "<th>Number of Members</th>";  
		echo "<th>Number of Delux Rooms</th>"; 
		echo "<th>Number of Members</th>";  
		echo "<th>Number of Club Rooms</th>"; 
		echo "<th>Number of Members</th>"; 
		echo "<th>Number of Premium Rooms</th>"; 
		echo "<th>Number of Members</th>"; 
		echo "<th>Number of Suite Rooms</th>"; 
		echo "<th>Number of Members</th>"; 
		echo "</tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row["firstname"]."</td>";
			echo "<td>".$row["lastname"]."</td>";
			echo "<td>".$row["phone_number"]."</td>";
			echo "<td>".$row["email_address"]."</td>";
			echo "<td>".$row["city"]."</td>";
			echo "<td>".$row["check_in"]."</td>";
			echo "<td>".$row["check_out"]."</td>";
			echo "<td>".$row["stdRooms"]."</td>";
			echo "<td>".$row["no_of_memb1"]."</td>";
			echo "<td>".$row["delRooms"]."</td>";
			echo "<td>".$row["no_of_memb2"]."</td>";
			echo "<td>".$row["clbRooms"]."</td>";
			echo "<td>".$row["no_of_memb3"]."</td>";
			echo "<td>".$row["preRooms"]."</td>";
			echo "<td>".$row["no_of_memb4"]."</td>";
			echo "<td>".$row["sutRooms"]."</td>";
			echo "<td>".$row["no_of_memb5"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
		mysqli_free_result($result);
		}
		else
		{
			echo "No records matching your query were found.";
		}
		}else
		{
		echo "ERROR: could not able to execute $sql".
			mysqli_error($link);
		}
		mysqli_close($link);
		?>
</body>
</head>
</html>