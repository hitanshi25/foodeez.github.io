<?php
  require '../controller/controller.php';
  $obj = new Controller;
  $row = $obj->innerJoin('recipe','subcategory','subcat_id','id' , null , 'user_id' , $_SESSION['login']);
?>
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
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <?php include 'common/header.php'; ?>
	  </nav>
    <!-- END nav -->

    


    <section class="ftco-menu">
    	<div class="container-fluid">
    		<div class="row d-md-flex">
	    		
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 

             
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
                <thead>
                    <tr>
                        <th>
                            <a class="btn btn-primary" href="upload.php?action=addform" >
                                <i class="fa fa-plus"></i>ADD
                            </a>
                        </th>
                    </tr>
                  <tr>
                   <th>Sr no</th>                
                   <th>Name</th>                
                   <th>Description</th>                
                   <th>File / Image</th>
                   <th>Video</th>
                   <th>Preview Image</th>  
                   <th>Category</th>          
                   <th>SubCategory</th>
                   <th>Action</th>                
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $srno = 1;
                    if(!empty($row))
                    {
                      foreach($row as $key => $val)
                      {
                        $cat = $obj->getSingleData('category' , array("id" => $val['subcategory_cat_id']));

                  ?>
                  <tr>
                    <td><?php echo $srno; ?></td>
                    <td><?php echo $val['recipe_name']; ?></td>
                    <td><?php echo $val['recipe_description']; ?></td>
                    <td><a href="<?php echo $val['recipe_img']; ?>" target="_blank">View</a>
                      </td>
                    <?php
                    if($val['recipe_video_type'] == "selfhosted")
                    { 
                    ?>
                    
                    <td>
                      <video src="<?php echo $val['recipe_video']; ?>" width="320" height="240" controls>
  
                      </video>
                    </td>

                  <?php } 
                  else
                  {
                  ?>

                  <td><a class="popup-youtube" href="<?php echo $val['recipe_video']; ?>">Open YouTube video</a></td>

                <?php } ?>
                    
                    <td><img src="<?php echo $val['recipe_pre_img']; ?>" style="height: 100px;width:100px;"></td>
                    <td><?php echo $cat[0]['name']; ?></td>
                    
                    <td><?php echo $val['subcategory_name']; ?></td>
                    <td>
                      <a href="upload.php?action=editform&id=<?php echo $val['recipe_id'] ?>" class="btn btn-info"><i class="fa fa-pencil-square-o">EDIT</i></a>
                      <strong>|</strong>
                      <a href="upload.php?action=delete&id=<?php echo $val['recipe_id'] ?>" class="btn btn-danger" onclick="return confirmDelete();"><i class="fa fa-trash">DELETE</i></a>
                    </td>
                  </tr>

                <?php $srno++; } }  ?>
                </tbody>
              </table>
           

                    <?php
                
               if(isset($_REQUEST['id']))
               {
                
                $data = $_REQUEST;
               

                $res = $obj->updateData('cart' , $data , array('id' => $data['id']));
                if($res)
                {
                  echo "<script>alert('Cart Updated');</script>";
                  echo "<script>window.location='cart.php';</script>";
                }
               }

               if(isset($_REQUEST['cart_id']))
               {
                
               
               

                $res = $obj->deleteData('cart' ,  array('id' => $_REQUEST['cart_id']));
                if($res)
                {
                  echo "<script>alert('Product Remove From Cart');</script>";
                  echo "<script>window.location='cart.php';</script>";
                }
               }

               if(isset($_REQUEST['total_amount']))
               {
                $data = array();
                $data['total_amount'] = $_REQUEST['total_amount'];
                $data['order_status'] = 'pending';
                $data['order_date'] = date('d-m-Y');
                $data['pay_status'] = 'unpaid';
                $data['pay_type'] = 'cod';
                $data['user_id'] = $_SESSION['login'];

                $obj->insertData('ordermaster' , $data);
                $last = mysqli_insert_id($obj->con);

                $row = $obj->getSingleData('cart' , array('user_id' => $_SESSION['login']));
                  foreach($row as $key => $val)
                  {
                    $cart = array();
                    $cart['qty'] = $val['qty'];
                    $cart['ing_id'] = $val['ing_id'];
                    $cart['amt'] = $val['amount'];
                    $cart['ordermaster_id'] = $last;
                    $obj->insertData('orderdetail' , $cart);
                  }

                  $res = $obj->deleteData('cart' ,  array('user_id' => $_SESSION['login']));
               }
               ?>
		             
					  
					  
		            </div>
		          </div>
		        
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

   	
		

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
                <li><a href="#" class="py-2 d-block">Chef</a></li>
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