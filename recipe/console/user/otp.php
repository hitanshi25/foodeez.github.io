<?php 
  require '../controller/controller.php';
  $cont = new Controller;

  
    
    if(!empty($_REQUEST) && isset($_REQUEST['otp']))
    {
    	
       $row =  $cont -> getSingleData('user',$_REQUEST);
       if($row)
       {
   		$data['status'] = '1';    	
          $row =  $cont -> updatedata('user',$data , array("contact" => $_REQUEST['contact'] , "otp" => $_REQUEST['otp']));
          echo "<script>window.location='login.php';</script>";
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
<body style="background-image: url('bimg9.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
	<br><br>
						<center><h1><b><font face="Vladimir Script" size="75" color="orange">OTP Verification </font></b></h1></center>
						<br><br><br><br>

	<div class="container">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
					<form method="POST" action="#">

	
	<table class="table table-bordered text-center" style="width: 80%;">
		
		<tr>
			<td style="color: #ffffff"><h2><b>OTP</b></h2></td>
			<td><input type="password" name="otp"></td>
			<input type="hidden" name="contact" autocomplete="off" value="<?php echo $_REQUEST['contact']; ?>">
		</tr>
		<tr>
			<td colspan="2"><center><input type="submit" value="verify" class=""></center></td>
		</tr>

		
		
	</table>
	
	</form>
			</div>
		</div>
	</div>

	
</body>
<br><br>

</html>