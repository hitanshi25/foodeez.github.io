<?php
//include("header.php");
?>

<?php 


function sendSms($mobile, $otp)
 {

    $curl = curl_init();
   // $api_key = "e2f9b481-6774-11ea-9fa5-0200cd936042";
     $api_key = "919aebe4-7fd2-11ea-9fa5-0200cd936042";
    curl_setopt_array($curl, array(
        CURLOPT_URL => "http://2factor.in/API/V1/" . $api_key . "/SMS/" . $mobile . "/" . $otp,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
    ));

    $response1 = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        
    }
}

  require '../controller/controller.php';
  $cont = new Controller;

  
    
    if(!empty($_REQUEST))
    {
    	$data = $_REQUEST;
    	unset($data['cpwd']);
    	$otp = rand(1000, 9999);
   		$data['otp'] =  $otp;
   		$data['status'] = '0';    	
    	$data['image'] = $cont -> uploadfile($_FILES,'f');

        sendSms($_REQUEST['contact'],$otp);

    	
       $row =  $cont -> insertData('user',$data);
       if($row)
       {

         
         // $_SESSION['login'] = $row[0]['id'];
         
          echo "<script>window.location='otp.php?contact=".$_REQUEST['contact']."';</script>";
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
	<title>SIGN UP</title>

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


    <style>
      

      table
      {
        font-size: 30px;
        color:black;
      }
    </style>
	
</head>
	
		
	

  <body style="background-image: url('bimg11.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">

<div class="container">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
	

						<br><br>
						<center><h1><b><font face="Vladimir Script" size="75" color="black" style="font-size: 70px; background-color: yellow;"><u>Registration </u></font></b></h1></center>
						<br><br><br><br>
		  <center>
            <form method="POST" enctype="multipart/form-data">
           <table class="table text-center">
			
			<tr>
                     <td><h2><font color="black"> <b>Name</b></font></h2></td>
					 <td><input type="text" name="name" style="border-radius: 10px" autocomplete="off"></td>
			</tr>
			<tr>
					<td><h2><font color="black"> <b>Email</b></font></h2></td>
					<td><input type="email" name="email" style="border-radius: 10px" autocomplete="off"></td>
			</tr>
			  
			<tr>
					<td><h2><font color="black"> <b>Username</b></font></h2></td>
					<td><input type="text" name="username" style="border-radius: 10px" autocomplete="off"></td>
			</tr>
			
			<tr>
					<td><h2><font color="black"> <b>Password</b></font></h2></td>
					<td><input type="password"   name="password" style="border-radius: 10px" autocomplete="off"></td>
			</tr>
			  
			  <tr>
					<td><h2><font color="black"> <b>Confirm Password</b></font></h2></td>
					<td><input type="password" name="cpwd" style="border-radius: 10px" autocomplete="off"></td>
			  </tr>
			  
			  <tr>
					<td><h2><font color="black"> <b>Address</b></font></h2></td>
					<td><textarea name="address" cols="15" rows="3" style="border-radius: 10px" autocomplete="off"></textarea></td>
			  </tr>
			  
			  <tr>
					<td><h2><font color="black"> <b>Mobile No.</b></font></h2></td>
					<td><input type="text" name="contact" style="border-radius: 10px" autocomplete="off"></td>
			  </tr>

			  <tr>
					<td><h2><font color="black"> <b>Profile Picture</b></font></h2></td>
					<td><input type="file" name="f" style="border-radius: 10px" autocomplete="off"></td>
			  </tr>
			  
			  
			  
			  <tr>
					
					<td colspan="2"><input type="submit" value="submit" style="border-radius: 10px; background-color: yellow"></td>
	
				</tr>

			 
			 </table>
            </form>
			</center>
		</div>
	</div>
</div>
			
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  
</body>

<br><br>


</html>