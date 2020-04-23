<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Total Number of Users</title>
<meta name="description" content="example-aggregate-functions-and-grouping-count-function- php MySQL examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body style="background-image: url('users2.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row">
<div class="col-md-12"><br><br><br>
<center><h1><b><u>Number of Registered User:</u></b></h1><br></center><br><br><br>
<table class='table table-bordered'>
<tr>
<th><h1><b><font color="yellow">No. of Users</font></b></h1></th>
</tr>
<?php
 	  $servername="localhost";
      $username="root";
      $password="";
      $db="recipe";
      $conn = new mysqli($servername,$username,$password,$db);
foreach($conn->query('SELECT COUNT(*) FROM user') as $row) {
echo "<tr>";
echo "<td>"."<h1>" ."<b>"."<font color='white'>". $row['COUNT(*)'] ."</font>"."</b>"."</h1>". "</td>";
echo "</tr>";
}
?>
</table>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>