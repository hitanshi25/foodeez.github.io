<?php 
  require '../controller/controller.php';
  $cont = new Controller;
  if(!$cont -> is_login())
  {
    echo "<script>window.location='login.php';</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">



<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The FOODEEZ Admin - Dashboard | Controller</title>

  <!-- Custom fonts for this template-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <!--<a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fa fa-bars"></i>
    </button>
-->
    <!-- Navbar Search -->
   <!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" style="background-image: url('bimg5.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
       <!-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span> -->
        </a>
       <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
       <!-- <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope fa-fw"></i> -->
        <!--  <span class="badge badge-danger">7</span>-->
        </a>
       <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item dropdown no-arrow">
        <!--<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user-circle fa-fw"></i> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
     
      
      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=categorycontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Category</span>
        </a>
      </li>

         <li class="nav-item">
        <a class="nav-link" href="index.php?controller=subcategorycontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Sub Category</span>
        </a>
      </li>
     
    <li class="nav-item">
        <a class="nav-link" href="index.php?controller=ingredienttypecontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Ingredient Type</span>
        </a>
      </li>
        
        <li class="nav-item">
        <a class="nav-link" href="index.php?controller=ingredientcontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Ingredient</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="index.php?controller=recipecontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Recipe</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=recipecontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Order Master</span>
        </a>
      </li>


       <li class="nav-item">
        <a class="nav-link" href="index.php?controller=eventcontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Event</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=chefcontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Chef</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=tipscontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Tips</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=platecontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Plating</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=gallerycontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Gallery</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=newscontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>News</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=bookcontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Books</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?controller=equipmentcontroller&action=listdata">
          <i class="fa fa-fw fa-tachometer-alt"></i>
          <span>Equipments</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
 -->

          <?php 
            if(isset($_REQUEST['controller']))
            {
              $page = $_REQUEST['controller'];
               include '../controller/'.$page.".php";
               $obj = new $page;
               $obj->loadview($_REQUEST['action']);
                //$cont -> loadview($_REQUEST['page']);
            }
            else
            {
              include 'page/main.php';  
            }
            
            
          ?>
        

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2020</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>


  <script type="text/javascript">
    
    function confirmDelete()
    {
        var c = confirm("ARE  YOU SURE?");
        if(c == true)
        {
          return true;
        }
        else
        {
          return false;
        }
    }
  </script>

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


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2019 08:03:12 GMT -->
</html>
