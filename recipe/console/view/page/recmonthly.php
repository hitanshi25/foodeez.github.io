<html>
<head>
	<title> Monthly Recipe Report </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<style> 
td
{

  padding: 40px 0;
}
table {
  border-collapse: separate;
  border-spacing: 50px 0;
}
</style>
		
</head>
<body style="background-color:  #000033 ; background-position: center; background-repeat: no-repeat; background-size: cover;">
	<?php
			 $servername="localhost";
     		 $username="root";
      		 $password="";
      		 $db="recipe";
      		 $conn = new mysqli($servername,$username,$password,$db);

	?>
	<br>
	<center><h1><b><u> <font color="yellow" face="Charlemagne Std">Monthly Recipe Report</font></u></b></h1></center>
	<form method="POST" autocomplete="off">
		<center>
			<table >
				<tr>
					
					<td><h1><font color="white"> Enter Month</font></h1></td>
					<td><h1>
						<input type="text" id="txtForm" name="Frommonth" placeholder="MM" style="height: 30px; font-size: 25px; width: 100px; font-weight: bold;"/>
					</h1></td>
				</tr>
				 
			</table>
			&emsp;
			&emsp;
				
				<input type="submit" value="SEARCH" name="monthsearch" style="font-size: 19px; font-weight: bold; border: solid 3px black; height: 40px;" /> 
			
		<center>
		<br>	
		<table  cellpadding="30px" cellspacing="40px" border="0" style=" border: solid 4px yellow; ">
			<tr>
				<th ><h1><b> <u> <font color="white" face="Monotype Corsiva" size="15px">Name</font></u></b></h1> </th>
				<th><h1><b><center> <font color="white" face="Monotype Corsiva" size="15px"><u>Preview</u></font></center></b></h1></th>
				<th><h1><b> <center><font color="white" face="Monotype Corsiva" size="15px"><u>Date </u>- <u>Time</u></font></center> </b></h1></th>
			</tr>
  
		<?php
			 
      		 if(isset($_POST['monthsearch']))
      		 {
      		 	$selectdate=$_POST['Frommonth'];
      		 	$query=mysqli_query($conn,"select * from recipe where month(rdate)='$selectdate'");
      		 	$count=mysqli_num_rows($query);
      		 	if($count=="0")
      		 	{
      		 		echo "NO Recipe Found.";
      		 	}
      		 	else
      		 	{
      		 		while($row=mysqli_fetch_array($query))
      		 		{
      		 			//echo "<b>".$row["name"]."</b>"."<br>";

      		 			echo "<tr>";
						//echo "<td>"."<h3>"."<b>"."Name : "."</b>"."</h3>"."</td>";
						echo "<td>"."<h1>"."<b>"."<font color='white'>".$row["name"]."</font>"."</b>"."</h1>"."</td>";
					
						?>
						
						<?php
						//echo "<tr>";
						//echo "<td>"."<h3>"."<b>"."Preview Image: "."</b>"."</h3>"."</td>";
						
						echo "<td>"."<img src=$row[pre_img]  alt='$row[name]' style='height:250px; width:250px;'>"."</td>";
						?>
						
						


						<?php
						
						//echo "<tr>";
						//echo "<td>"."<h3>"."<b>"."Date : "."</b>"."</h3>"."</td>";
						echo "<td>"."<h1>"."<b>"."<font color='white'>".$row["rdate"]."</font>"."</b>"."</h1>"."</td>";
						echo "</tr>";
      		 		}
      		 	}
      		 }
		?>
</table>
	</form>
</center>
</body>


</html>