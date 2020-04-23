<html>
<head>
	<title> Yearly & Monthly </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
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
<body style="background-color:  #000033 ;">
	<?php
			 $servername="localhost";
     		 $username="root";
      		 $password="";
      		 $db="recipe";
      		 $conn = new mysqli($servername,$username,$password,$db);

	?>
	<br>
	<br>
	<center><h1><b><u> <font color="yellow" face="Charlemagne Std">Yearly & Monthly Recipe Report</font></u></b></h1><br></center>
	<form method="POST" autocomplete="off">
		<center>
			<table >
				<tr>
					<td><h1><b><font color="white" >Enter Year</font></b></h1></td>
					<td><h2>
						<input type="text" id="txtForm" name="Fromyear" placeholder="YYYY" style="height: 30px; font-size: 25px; width: 100px;  font-weight: bold;" />
					</h2></td>
					<td><h1><b><font color="white">Enter Month</font></b></h1></td>
					<td><h2>
						<input type="text" id="txtForm" name="Frommonth" placeholder="MM" style="height: 30px; font-size: 25px; width: 100px;  font-weight: bold;" />
					</h2></td>
				</tr>
				 
			</table>
			&emsp;
			&emsp;
				<input type="submit" value="SEARCH" name="search" style="font-size: 19px; font-weight: bold; border: solid 3px black; height: 40px;" /> <br><br><br>

<table  cellpadding="30px" cellspacing="40px" border="0" style=" border: solid 4px yellow; ">
	<tr>
		<th ><h1><b> <center><u><font color="white" face="Monotype Corsiva" size="15px">Name</font></u></center></b></h1> </th>
		<th><h1><b><center> <u><font color="white" face="Monotype Corsiva" size="15px">Preview</font></u></center></b></h1></th>
		<th><h1><b> <center><font color="white" face="Monotype Corsiva" size="15px"><u>Date </u>- <u>Time</u></font></center> </b></h1></th>
	</tr>
  <tr>
  </tr>	
  <tr>
  </tr>	
		<?php
			 
      		 if(isset($_POST['search']))
      		 {
      		 	$selectmonth=$_POST['Frommonth'];
      		 	$selectyear=$_POST['Fromyear'];
      		 	$query=mysqli_query($conn,"select * from recipe where month(rdate)='$selectmonth' and year(rdate)= '$selectyear'");
      		 	$count=mysqli_num_rows($query);
      		 	if($count=="0")
      		 	{
      		 		echo "<b><h2><font color='white'> NO Recipe Uploaded. </font></h2></b>";

      		 	}
      		 	else
      		 	{
      		 		while($row=mysqli_fetch_array($query))
      		 		{
      		 			//echo "<b>".$row["name"]."</b>"."<br>";

      		 			echo "<tr>";
						//echo "<td>"."<h3>"."<b>"."Name : "."</b>"."</h3>"."</td>";
						echo "<td>"."<h3>"."<b>"."<font color='white'>".$row["name"]."</font>"."</b>"."</h3>"."</td>";
					
						?>
						
						<?php
						//echo "<tr>";
						//echo "<td>"."<h3>"."<b>"."Preview Image: "."</b>"."</h3>"."</td>";
						
						echo "<td>"."<img src=$row[pre_img]  alt='$row[name]' style='height:250px; width:250px;'>"."</td>";
						?>
						
						


						<?php
						
						//echo "<tr>";
						//echo "<td>"."<h3>"."<b>"."Date : "."</b>"."</h3>"."</td>";
						echo "<td>"."<h3>"."<b>"."<font color='white'>".$row["rdate"]."</font>"."</b>"."</h3>"."</td>";
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