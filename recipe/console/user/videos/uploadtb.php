<html>
	<head>
		
		<title>
				Upload Table
		</title>
	</head>
	
	<body>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$database="project";
			$con= new mysqli($servername,$username,$password,$database);
			
			if($con-> connect_error)
			{
				echo "Connection Failed"."<br>";
			}
			else
			{
				echo "Connection Successful"."<br>";
			}
			
			
			$sql="Create table video(id int(11) auto_increment primary key,name varchar(255),location varchar(255))";
			if($con->query($sql)==TRUE)
			{
				echo "Table Created";
			}
			else
			{
				echo "Table Not Created".$con->error;
			}
		?>
	</body>

</html>