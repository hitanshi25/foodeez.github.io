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
?>
<!doctype html>
<html>
  <head>
    <style>
    video{
     float: left;
    }
    </style>
  </head>
  <body>
    <div>
 
     <?php
     $fetchVideos = mysqli_query($con, "SELECT location FROM video ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
 
       echo "<div >";
       echo "<video src='".$location."' controls width='320px' height='200px' >";
       echo "</div>";
     }
     ?>
 
    </div>

  </body>
</html>