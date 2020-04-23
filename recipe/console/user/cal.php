<?php
  require '../controller/controller.php';
  $obj = new Controller;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BOOKS</title>
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
    <style type="text/css">
      img
      {
        width: 1200px;
      }
    </style>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <?php include 'common/header.php'; ?>
	  </nav>
    <!-- END nav -->





 <body style="background-image: url('cal7.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
 	<br><br>
 <center>
  <font face = "forte" size="50px" color="black"><b>Calorie Calculator</b></font>
  <br>
  <br>
  
	<form method="POST" >
		<table>
			<tr>
	<td><font size="10px" color="black">Gender:</font></td>
	
		
			<td><Select name="gender" style="height: 40px; width:300px; font-size:20px; color:black;"><br>
		<option>Male</option>
		<option>Female</option>
		</select><br><br></td>
	</tr>
	<tr>

	<td><font size="10px" color="black">Age: </font></td>

		<td><input name="age" type="text" style="height: 40px; width:300px; font-size:20px; " autocomplete="off"> <b>years</b><br><br></td>
	</tr>
	<tr>

	<td><font size="10px" color="black">Weight:</font></td>
		<td><input name="weight" type="text" style="height: 40px; width:300px;font-size:20px;" autocomplete="off"><b>kgs</b><br><br></td>
	</tr>
	<tr>

	<td><font size="10px" color="black">Height:</font></td>
	<td><input name="height" type="text" style="height: 40px; width:300px; font-size:30px;" autocomplete="off"><b>cm</b><br><br></td>
	</tr>
	</table>
		<br><input type="submit" name="submit" value="submit" style="height: 40px; width:100px; font-size:20px;">
	
<br><br><br><br>
		

	</form>
   </center>

   <?php
if(isset($_POST['submit']))
{
			$ag=$_POST['age'];
			$weig=$_POST['weight'];
			$heig = $_POST['height'];
			$calories="0.0215183";
			$gen=$_POST['gender'];
			
		
				switch ($gen){
					case 'Female':
						$gen= 655 + (9.6 * $weig ) + (1.8 * $heig) - (4.7 * $ag);
						echo "<h1>"."<font color='white'>"."Your estimated daily metabolic rate is $gen"."</font>"."</h1>";
						echo "<h2>"."<font color='white'>"."This means that you need rouhgly $gen calories a day to maintain your current weight."."</font>"."</h2>";

						break;
						case 'Male':
							$gen=66 + (13.7 *$weig) + (5 * $heig) - (6.8 * $ag);
							echo "<h1>"."<font color='white'>"."Your estimated daily metabolic rate is $gen"."</font>"."</h1>";
							echo "<h2>"."<font color='white'>"."This means that you need rouhgly $gen calories a day to maintain your current weight."."</font>"."</h2>";
							break;
										
	
				}
			}
?>



		
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>The Foodeez is a recipe website.Our website is customizable and scalable, offering customers a variety of features at single platform. </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Recipes</a></li>
                <li><a href="#" class="py-2 d-block">Buy Ingredients</a></li>
                <li><a href="#" class="py-2 d-block">Events</a></li>
                <li><a href="#" class="py-2 d-block">Chefs</a></li>
                <li><a href="#" class="py-2 d-block">News</a></li>
                <li><a href="#" class="py-2 d-block">Serving Suggestions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">9106917965</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">thefoodeez25@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script><br>
  Thanks for Visiting  <i class="icon-heart" aria-hidden="true"></i> The Foodeez <i class="icon-heart" aria-hidden="true"></i>
			</p>
          </div>
        </div>
      </div>
    </footer>
    
  <!-- loader -->
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
</html>