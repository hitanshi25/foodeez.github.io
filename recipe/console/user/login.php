<?php
//include("header.php");
?>

<?php 
  require '../controller/controller.php';
  $cont = new Controller;

  
    
    if(!empty($_REQUEST))
    {
    	
       $row =  $cont -> getSingleData('user',$_REQUEST);
       if($row)
       {

         //print_r($row[0]['id']);
          $_SESSION['login'] = $row[0]['id'];
         
          echo "<script>window.location='index.php';</script>";
       }
       else
       {
          echo "<script>alert('Something wrong');</script>";
       }
    }
  
  
?>
<!doctype html>
<html>

<head>
	<title>LOGIN</title>

	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body style="background-image: url('cap5.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<br><br>
						<center><h1><b><font face="Vladimir Script" color="orange" style="font-size: 60px;"><u>Sign In</u> </font></b></h1></center>
						<br><br>

	<div class="container">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-9">
					<form method="POST" action="#">

	
	<table class="text-center" style="width: 100%; border: solid 3px black">
		<tr>
			<td><h3><font color="black">User Name</font></h3></td>
			<td><input type="text" name="username" style="border-radius: 10px" autocomplete="off"></td>
		</tr>
		<tr>
			<td> <h3><Font color="black">Password</Font></h3></td>
			<td><input type="password" name="password" style="border-radius: 10px" autocomplete="off"></td>
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" class="btn btn-primary btn-block" value="Login" style="font-size: 25px;"></center></td>
		</tr>

		<!--<tr>
			Don't have an Account? <a href="register.php"><h4><font color="red">Register</font></h4></a>
		</tr> -->
		
	</table>
		<h5><font color="blue">Don't have an Account? </font></h5> <a href="register.php"><h4><font color="red">Register</font></h4></a>
	</form>
			</div>
		</div>
	</div>

	
</body>
<br><br>

</html>