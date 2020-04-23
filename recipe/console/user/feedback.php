<!doctype html>
<html>
	<head>
		<title> FEEDBACK </title>
		<?php
			$servername="localhost";
			$username="root";
			$password="";
			$db="recipe";
			$conn = new mysqli($servername,$username,$password,$db);
	
			if($conn->connect_error)
			{
				die("Connection Failed");
			}
			else
			{
				echo "<br>"."Connection Successful"."<br><br>";
			}
	
		?>
	</head>
	
	<body bgcolor="ffffcc"><br>
	
		<?php
			
			if(isset($_POST["btnsub"]))
			{
	
				
				$strins="Insert into contact(name,mail,message)
				         values ('".$_POST["uname"]."','".$_POST["mail"]."','".$_POST["msg"]."')";
				
				$result=$conn->query($strins);
				if($result==1)
				{
					echo "Record inserted";
				}
				else
				{
					echo "Not inserted".$conn->error;
				}
			}
		?>

		<form name="f1" method="POST">
			<table align="center" width="500px" cellpadding="4px" border="2" bgcolor="#ff9999">
			
				<tr>
					<td>Name:</td>
					<td><input type="text" name ="uname" placeholder="Abc" required></td>
				</tr>

				<tr>
					<td>Email</td>
					<td><input type="email" name ="mail"  placeholder="mail@gmail.com"></td>
				</tr>

				<tr>
					<td>Message</td>
					<td><input type="text" name ="msg"  placeholder="Your Reviews"></td>
				</tr>
 
				<tr>
					
					<td><input type="submit" name="btnsub"  value="Insert"></td>
					
				</tr>

			</table>

		</form>

	</body>
	
</html>
