
<?php 
  require '../controller/controller.php';
  $cont = new Controller;

  
    
    if(!empty($_REQUEST))
    {
       $row =  $cont -> getSingleData('admin',$_REQUEST);
       if($row)
       {

         //print_r($row[0]['id']);
          $_SESSION['login'] = $row[0]['id'];
         
          echo "<script>window.location='index.php';</script>";
       }
       else
       {
          echo "<script>alert('Something wrong');</script>";
       }
    }
  
  
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2019 08:03:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="#" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Enter Username" required="required" name="username" autofocus="autofocus">
              <label for="inputEmail">Enter Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            
          </div>
          <input type="submit"  class="btn btn-primary btn-block" value="LOGIN">
          
        </form>
        
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>


<!-- Mirrored from blackrockdigital.github.io/startbootstrap-sb-admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Sep 2019 08:03:20 GMT -->
</html>
