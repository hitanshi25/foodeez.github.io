<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Total Number of Recipes</title>
<meta name="description" content="example-aggregate-functions-and-grouping-count-function- php MySQL examples | w3resource">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body style="background-image: url('rec1.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
<div class="container">
<div class="row">
<div class="col-md-12">
<center><br>
<h1><b><u>Total Number of Recipes Uploaded</u></b></h1><br></center>
<center>
<table class='table table-bordered'>
<tr>
<th><h2><b>No. of Recipes</b></h2></th>
</tr>
<?php
 	  $servername="localhost";
      $username="root";
      $password="";
      $db="recipe";
      $conn = new mysqli($servername,$username,$password,$db);
foreach($conn->query('SELECT COUNT(*) FROM recipe') as $row) {
echo "<tr>";
echo "<td>"."<h1>"."<b>" . $row['COUNT(*)'] ."</b>"."</h1>". "</td>";
echo "</tr>";
}
?>
</table>
</center>
</div>
</div>
</div>
<br><br><br><br><br><br><br>
</body>
</html>