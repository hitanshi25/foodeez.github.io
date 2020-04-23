<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Recipies</title>
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
    <?php
    if(isset($_SESSION['login'])) 
    {
    ?>
   
  <?php } ?>
   
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">

		      <a class="navbar-brand" href="index.php"><span class="flaticon-pizza-1 mr-1"></span>The<br><small>Foodeez</small></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="oi oi-menu"></span> Menu
		      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
			      <li class="nav-item"><a href="login.php" class="nav-link">Sign In</a></li>
			  
	          <li class="nav-item"><a href="receipe.php" class="nav-link">Recipes</a></li>
	          <li class="nav-item"><a href="service.php" class="nav-link">Services</a></li>
              <li class="nav-item"><a href="chef.php" class="nav-link">Chef</a></li>
              <li class="nav-item"><a href="plate.php" class="nav-link">Serving Suggestions</a></li>
              <li class="nav-item"><a href="event.php" class="nav-link">Events</a></li>
              <li class="nav-item"><a href="tips.php" class="nav-link">Tips & Tricks</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
			  
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
</body>


</html>
