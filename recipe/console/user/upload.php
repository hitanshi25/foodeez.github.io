<?php
//include("header.php");
?>

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
                $data['pre_img'] =  $obj-> uploadfile($_FILES,'m');
                $data['user_id'] =  $_SESSION['login'];

                if($_FILES['v']['name'] == null)
                {
                  $data['video'] = $_REQUEST['video'];
                  $data['video_type'] = 'link';
                }
                else
                {
                  $data['video'] =  $obj-> uploadfile($_FILES,'v');
                  $data['video_type'] = 'selfhosted';
                }
                $obj->insertData('recipe',$data); 

                  echo "<script>window.location='add.php';</script>";

      }

      if(isset($_REQUEST['action']) && $_REQUEST['action'] == "edit")
        {
               $data = $_POST;

               if($_FILES['f']['name'] == null)
               {
                $data['img'] = $_REQUEST['oldpath'];
               }
               else
               {
                $data['img'] =  $obj-> uploadfile($_FILES,'f'); 
               }

               if($_FILES['m']['name'] == null)
               {
                $data['pre_img'] = $_REQUEST['preoldpath'];
               }
               else
               {
                $data['pre_img'] =  $obj-> uploadfile($_FILES,'m'); 
               }

               if($_FILES['v']['name'] == null)
                {
                  $data['video'] = $_REQUEST['video'];
                  $data['video_type'] = 'link';
                }
                else
                {

                  if($_FILES['v']['name'] == null)
                  {
                    $data['video'] = $_REQUEST['video'];
                    $data['video_type'] = 'selfhosted';
                  }
                  else
                  {
                    $data['video'] =  $obj-> uploadfile($_FILES,'v');
                    $data['video_type'] = 'selfhosted';
                  }
                  
                }

               unset($data['oldpath']);
               unset($data['preoldpath']);
               unset($data['m']);
                
               $obj->updateData('recipe',$data,array("id" => $_REQUEST['id']));
               echo "<script>window.location='add.php';</script>";
      }
      if(isset($_REQUEST['action']) && $_REQUEST['action'] == "delete")
        {
            $obj->deleteData('recipe',array("id" => $_REQUEST['id']));
            echo "<script>window.location='add.php';</script>";
        }
        ?>
        <?php
        if($_REQUEST['action'] == 'addform' && isset($_REQUEST['action']) ) 
        {
        ?>
           <form method="post" action="upload.php?action=add" enctype="multipart/form-data">
                <br>
                <div class="form-group">
                    <label><h2><font color="black"><b>Name:</b></font></h2></label>
                    <input type="text" name="name" class="form-control" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label><h2><font color="black"><b>Description:</b></font></h2></label>
                    <input type="text" name="description" class="form-control" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label><h2><font color="black"><b>File:</b></font></h2></label>
                    <input type="file" name="f" class="form-control" autocomplete="off">

                </div>   
                <label><h2><font color="black"><b>Video:</b></font></h2></label>
                <div class="form-group">
                    <a class="btn btn-info" id="self_btn"><i class="fa fa-play"></i>Self Hosted</a>
                    <a class="btn btn-info" id="link_btn"><i class="fa fa-link"></i>Link</a>

                </div>
                
                <div class="form-group" id="self_hosted" style="display: none;">
                    <label><h2><font color="black"><b>Video:</b></font></h2></label>
                    <input  type="file" name="v" class="form-control">

                </div> 

                <div class="form-group" id="video_link" style="display: none">
                    <label><h2><font color="black"><b>Video:</b></font></h2></label>
                    <input type="text" name="video" class="form-control">
                </div>   

                <div class="form-group">
                    <label><h2><font color="black"><b>Preview Image:</b></font></h2></label>
                    <input type="file" name="m" class="form-control" accept="image/*">
                </div>

                <div class="form-group">
                    <label><h2><font color="black"><b>Select Sub Catregory</b></font></h2></label>
                    <select name="subcat_id" class="form-control">
                        <option value="0">Select Sub Category</option>
                        <?php
                            foreach($cat as $ckey => $cval) 
                            {
                                ?>
                            <option value="<?php echo $cval['id']; ?>"><?php echo $cval['name']; ?></option>
                           <?php  }
                        ?>
                    </select>
                </div>
               

               <div class="form-group">
                    <label><h2><font color="black"><b>Select Catregory</b></font></h2></label>
                    <select name="cat_id" class="form-control">
                        <option value="0">Select Category</option>
                        <?php
                            foreach($cat1 as $ckey => $cval) 
                            {
                                ?>
                            <option value="<?php echo $cval['id']; ?>"><?php echo $cval['name']; ?></option>
                           <?php  }
                        ?>
                    </select>
                </div>
                          
                
                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                </div>

            </form>
     <?php   } ?> 

      <?php
        if($_REQUEST['action'] == 'editform' && isset($_REQUEST['action']) ) 
        {
           $row = $obj->getSingleData('recipe',array("id" => $_REQUEST['id']));
                $cat = $obj->getMasterData('subcategory');
                $cat1 = $obj->getMasterData('category');
                 foreach($row as $key=>$val) 
            {
        ?>
           <form method="post" action="upload.php?action=edit" enctype="multipart/form-data">
                <div class="form-group">
                    <label><h2><font color="black"><b>Name:</b></font></h2></label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $val['name'] ?>">
                </div>

                <div class="form-group">
                    <label><h2><font color="black"><b>Description:</b></font></h2></label>
                    <input type="text" name="description" class="form-control" required value="<?php echo $val['description'] ?>">
                </div>

                <div class="form-group">
                    <label><font color="black"><b>Previous Image:</b></font></label>
                    <a href="<?php echo $val['img']; ?>" target="_blank">View</a>
                   

                </div>   


                 <div class="form-group">
                    <label><h2><font color="black"><b>File:</b></font></h2></label>
                    <input type="file" name="f" class="form-control">

                    <input type="hidden" name="oldpath" value="<?php echo $val['img']; ?>">
                </div>         

                <div class="form-group">
                    <label><font color="black"><b>Previous Video:</b></font></label>
                    <a href="<?php echo $val['video']; ?>" target="_blank">View</a>
                    
                </div>
               
                <label><h2><font color="black"><b>Video:</b></font></h2></label>
               <div class="form-group">
                    <a class="btn btn-info" id="self_btn"><i class="fa fa-play"></i>Self Hosted</a>
                    <a class="btn btn-info" id="link_btn"><i class="fa fa-link"></i>Link</a>

                </div>

                <div class="form-group" id="self_hosted" style="display: none;">
                    <label><h2><font color="black"><b>Video:</b></font></h2></label>
                    <input  type="file" name="v" class="form-control">

                </div> 

                <div class="form-group" id="video_link" style="display: none">
                    <label><h2><font color="black"><b>Video:</b></font></h2></label>
                    <input type="text" name="video" class="form-control" value="<?php echo $val['video']; ?>">
                </div>   
    

                <div class="form-group">
                    <label><font color="black"><b>Previous Preview Image:</b></font></label>
                   <!-- <a href="<?php echo $val['img']; ?>" target="_blank">View</a>-->
                   <input type="text" name="m" value="<?php echo $val['pre_img']; ?>" style="width: 100px, height:100px">

                </div>   


                 <div class="form-group">
                    <label><h2><font color="black"><b>Preview Image:</b></font></h2></label>
                    <input type="file" name="m" class="form-control">

                    <input type="hidden" name="preoldpath" value="<?php echo $val['pre_img']; ?>">
                </div>         


                <div class="form-group">
                    <label><h2><font color="black"><b>Select Sub Catregory</b></font></h2></label>
                    <select name="subcat_id" class="form-control">
                        <option value="0">Select Sub Category</option>
                        <?php
                            foreach($cat as $ckey => $cval) 
                            {
                                if($cval['id'] == $val['subcat_id'])
                                {
                                    $sel = 'selected';
                                }
                                else
                                {
                                    $sel = "";
                                }
                                ?>
                            <option value="<?php echo $cval['id']; ?>" <?php echo $sel; ?>><?php echo $cval['name']; ?></option>
                           <?php  }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label><h2><font color="black"><b>Select Catregory</b></font></h2></label>
                    <select name="cat_id" class="form-control">
                        <option value="0">Select Category</option>
                        <?php
                            foreach($cat1 as $ckey => $cval) 
                            {
                                if($cval['id'] == $val['cat_id'])
                                {
                                    $sel = 'selected';
                                }
                                else
                                {
                                    $sel = "";
                                }
                                ?>
                            <option value="<?php echo $cval['id']; ?>" <?php echo $sel; ?>><?php echo $cval['name']; ?></option>
                           <?php  }
                        ?>
                    </select>
                </div>                   
                

                <div class="form-group">
                    <input type="submit" value="ADD" class="btn btn-info">
                    <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">
                </div>

            </form>
     <?php   } } ?> 
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