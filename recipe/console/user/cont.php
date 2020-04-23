<?php
  require '../controller/controller.php';
  $obj = new Controller;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title>
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

    <?php
      $servername="localhost";
      $username="root";
      $password="";
      $db="recipe";
      $conn = new mysqli($servername,$username,$password,$db);
    ?>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <?php include 'common/header.php'; ?>
    </nav>
    <!-- END nav -->




  
    



<body>

<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/con9.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome to</span>
              <h1 class="mb-0">THE FOODEEZ</h1>
            	<h1 class="mb-3 mt-5 bread"><font size="30px">Contact Us</font></h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html"><h3>Home</h3></a></span> </p>
            </div>

          </div>
        </div>
      </div>
    </section>
	
	<br>
  <br>  

<div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Your Feedback</h2>
      <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p><br>
            <p>"Its Precious for US !!" </p>
          </div>
        </div>
      </div>

  <?php
      
      if(isset($_POST["submit"]))
      {
  
        
        $strins="Insert into contact(name,mail,message)
                 values ('".$_POST["uname"]."','".$_POST["mail"]."','".$_POST["msg"]."')";
        
        $result=$conn->query($strins);
        
      }
    ?>

      </section>    
          <br><br>
      
         <section>
            <center>
                <form name="f1" method="POST" style="background-image: url('rec1.jpg'); background-position: center; background-repeat: no-repeat; height:700px; width:1200px;">
      
      <br><br><br>
       
          <h3><font color="yellow"><b>NAME</b></font></h3><input type="text" name ="uname" class="form-contorl" placeholder="Abc" required style="width: 300px;height: 60px; background-color: #000;" autocomplete="off"><br>
        

        <br>
         <h3> <font color="yellow"><b>EMAIL</b></font></h3><input type="email" name ="mail" class="form-contorl" placeholder="mail@gmail.com" autocomplete="off" style="width: 300px;height: 60px;background-color: #000" required><br>
        

        <br>
             <h3><font color="yellow"><b>ADDRESS</b></font></h3><textarea rows="3" cols="36" class="form-contorl" placeholder="Your Message" name="msg" autocomplete="off" style="background-color: #000"></textarea><br>
          
         <br> <input type="submit" name="submit" class="btn btn-primary" value="Send Feedback" style="font-size: 25px;">
         
    </form> 

            </center>
          </section>  

    <section class="ftco-section contact-section">
	<center>
      <div class="container mt-16">
        <div class="row block-9">
					<div class="col-md-12 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-3">
	              <h1 class="h1"><b><u>Contact Information</u></b></h1>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span><b> <h3>Phone : </h3> </b> </span> <a href="tel://1234567920"><h4><font color="yellow">9106917965</font></h4></a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span><b><h3> Email :  </h3></b></span> <a href="mailto:info@yoursite.com"><h4><font color="yellow">thefoodeez25@gmail.com</font></h4></a></p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span><b> <h3>Website : </h3> </b><span> <a href="index.php"><h4><font color="yellow">TheFOODEEZ.com</font></h4></a></p>
	            </div>
						</div>
					</div>
	</center>

  
<center>
<footer class="ftco-footer ftco-section img">
      <div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>The Foodeez is a recipe website.Our website is customizable and scalable, offering customers a variety of features at single platform.  </p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-8 col-md-8 mb-8 mb-md-8">
            <div class="ftco-footer-widget mb-8">
              <h2 class="ftco-heading-4">Have a Questions?</h2>
              <div class="block-23 mb-6">
                <ul>
                  
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">9106917965</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">thefoodeez21@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </center>
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
    
  <center>
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
</center>

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
