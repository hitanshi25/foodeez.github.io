<html>
<head>
	<title>
			View FEEDBACK
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body style="background-image: url('feedback10.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">

<?php
	$servername="localhost";
			$username="root";
			$password="";
			$database="recipe";
			$con= new mysqli($servername,$username,$password,$database);
			
			
	echo "<br><br>";

	echo "<center><h1><b><u>Feedback</u><b></h1></center>"."<br>"; 
	?>
	<table class="table table-hover" style="font-size: 20px; font-color: white;">
		<?php
	$sql="select id,name,message from contact order by id";
	$result =$con-> query($sql);
	if ($result->num_rows > 0)
	{
		while($row=$result->fetch_assoc())
		{	
			echo "<tr>";
			echo "<td>"."<b>"."Id : "."</b>"."</td>";
			echo "<td>"."<b>".$row["id"]."</b>"."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<td>"."<b>"."Name : "."</b>"."</td>";
			echo "<td>"."<b>".$row["name"]."</b>"."</td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>"."<b>"."Message : "."</b>"."</td>";
			echo "<td>"."<b>".$row["message"]."</b>"."</td>";
			echo "</tr>";
			
		}

		
	}
	else
	{
		echo "Zero rows found";
	}
	
	
?>
</table>
</body>
</html>