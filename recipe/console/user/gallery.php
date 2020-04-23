<?php
  require '../controller/controller.php';
  $obj = new Controller;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Users Gallery</title>
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
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <?php include 'common/header.php'; ?>
	  </nav>
    <!-- END nav -->

      
    
      <section class="home-slider owl-carousel img">
      <div class="slider-item" style="background-image: url(images/gl2.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-10 ftco-animate">
              <span class="subheading">Welcome to</span>
              <h1 class="mb-0">THE FOODEEZ</h1><br>
              <p class="mb-4 mb-md-5"><font size="20px">"Your OWN Gallery"</font></p>
              
            </div>
            
          </div>
        </div>
      </div>

     <div class="slider-item" style="background-image: url(images/gl1.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome to</span>
              <h1 class="mb-4">THE FOODEEZ</h1>
              <p class="mb-4 mb-md-5"><font size="20px">“The best Comfort FOOD will always be the one COOKED by You."</font></p>
              
            </div>

          </div>
        </div>
      </div>
    
    <div class="slider-item" style="background-image: url(images/gl4.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome to</span>
              <h1 class="mb-4">THE FOODEEZ</h1>
              <p class="mb-4 mb-md-5"><font size="20px">“Stop being a vegan & start enjoying what you COOK.”</font></p>
              
            </div>

          </div>
        </div>
      </div>
    
          <div class="slider-item" style="background-image: url(images/gl3.jpg);">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <span class="subheading">Welcome to</span>
              <h1 class="mb-4">THE FOODEEZ</h1>
              <p class="mb-4 mb-md-5"><font size="20px">"There's no better feeling in the World than COOKING."</font></p>
              
            </div>

          </div>
        </div>
      </div>

       

       
       

       
    </section>


    

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Users Tried Recipe Images</h2>
			<p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p><br>
            <p>"Cooking should be FUN !!" </p>
          </div>
        </div>
    	</div>
    	<div class="container-fluid">
       
    		<div class="row no-gutters">
           <?php
        $row = $obj->getMasterData('gallery');
        foreach($row as $key=>$val)
        {
        ?>
    			<div class="col-lg-4 d-flex ftco-animate mb-5">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(<?php echo $val['img'] ?>); height: 500px; width: 500px; border: solid 3px white"></a>
    					
    				</div>
    			</div>

        <?php } ?>
    		
    		</div>
    	</div>

    <br><center><h3> Upload your Recipe Image ? </h3> <button type="button"> <a href="gallerydetail.php"><font color="black" size="5px">Click me </font></a></button></center>    	
    </section>

    

	

   
		  
    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>The Foodeez is a recipe website.Our website is customizable and scalable, offering customers to calculate the quantity to be made based on number of members . </p>
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
                <li><a href="#" class="py-2 d-block">Search</a></li>
                <li><a href="#" class="py-2 d-block">Download</a></li>
                <li><a href="#" class="py-2 d-block">Upload</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">9106917965</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">thefoodeez@gmail.com</span></a></li>
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