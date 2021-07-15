<html>
<head>
<body bgcolor="lightgreen">
<?php
$link=mysqli_connect("localhost","root","","hotel");
if($link===false){
	die("ERROR:could not connect".mysqli_connect_error());
	}
$sql="SELECT * FROM contacts";
if($result=mysqli_query($link,$sql))
{
	if(mysqli_num_rows($result)>0)
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>Name</th>";    
		echo "<th>email_address</th>";  
		echo "<th>phone_number</th>"; 
		echo "<th>subject</th>"; 
		echo "<th>message</th>";  
		echo "</tr>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row["Name"]."</td>";
			echo "<td>".$row["email_address"]."</td>";
			echo "<td>".$row["phone_number"]."</td>";
			echo "<td>".$row["subject"]."</td>";
			echo "<td>".$row["message"]."</td>";
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