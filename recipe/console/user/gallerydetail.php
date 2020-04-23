
<?php 

  require '../controller/controller.php';
  $obj = new Controller;

   $cat = $obj->getMasterData('subcategory');
    $cat1 = $obj->getMasterData('category');  
  
?>

<!doctype html>
<html>

<head>
	<title>RECIPE</title>

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

      .form-control {
  height: 58px !important;
  background: white !important;
  color:black !important;
  font-size: 18px;
  border-radius: 0px;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: transparent !important;
  border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
  padding-right: 0;
  padding-left: 0;
}
    </style>
	
</head>
	
		
	

  <body style="background-image: url('upback1.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">

<div class="container">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">
	

						<br><br>
						<center><h1><b><font face="Vladimir Script" size="75" color="black" style="font-size: 70px; background-color: yellow;"><u>Recipie</u></font></b></h1></center>
						<br><br><br><br>
		  <center>

        <?php
        if(isset($_REQUEST['action']) && $_REQUEST['action'] == "add")
        {
               $data= $_POST;

               
                $data['img'] =  $obj-> uploadfile($_FILES,'f');
                
                $obj->insertData('gallery',$data); 

                  echo "<script>window.location='gallery.php';</script>";

      }

        ?>
        
           <form method="post" action="gallerydetail.php?action=add" enctype="multipart/form-data">
                <br>
                
                <div class="form-group">
                    <label><h2><font color="black"><b>Preview Image:</b></font></h2></label>
                    <input type="file" name="f" class="form-control" accept="image/*">
                </div>

                
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                </div>

            </form>
      

      
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

  <script type="text/javascript">
  $(document).ready(function(){

  $("#self_btn").click(function(){
    $('#self_hosted').show('slow');
    $('#video_link').hide();
  });

  $("#link_btn").click(function(){
    $('#video_link').show('slow');
    $('#self_hosted').hide();
  });

});

  </script>

  <script>
$(function() {
    $('.popup-youtube, .popup-vimeo , .popup-video').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});
</script>
  
</body>

<br><br>


</html>