<!doctype html>
<html>
  <head>
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
			
 
    if(isset($_POST['but_upload'])){
       $maxsize = 5242880; // 5MB
 
       $name = $_FILES['file']['name'];
       $target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO video(name,location) VALUES('".$name."','".$target_file."')";

              mysqli_query($con,$query);
              echo "Upload successfully.";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
     } 
     ?>
  </head>
  <body>
    <form method="post" action="" enctype='multipart/form-data'>
      <input type='file' name='file'>
      <input type='submit' value='Upload' name='but_upload'>
    </form>

  </body>
</html>