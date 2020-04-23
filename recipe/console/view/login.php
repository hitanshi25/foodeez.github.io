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


<body style="background-image: url('board.jpg'); background-position: center; background-repeat: no-repeat;background-size: cover;">
  <br><br><br><br>
            <center><h1><b><font face="Vladimir Script" size="90" color="white"><u>Admin Login </u></font></b></h1></center>
            <br><br><br><br>
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
      </div>
      <div class="col-lg-8">
          <form method="POST" action="#">

  <center>
  <table class="table  text-center" style="width: 100%; height: 80%;">
    <tr>
      <td><font color="White"><h1>User Name</h1></font></td>
    <tr>
    <tr>
      <td><input type="text" name="username" autocomplete="off"></td>
    </tr>
    <tr>
      <td><font color="white"><h1>Password</h1></font></td>
    </tr>
    <tr>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <td><center>
      <input type="submit"  class="btn btn-primary btn-block" value="LOGIN"></center></td>
    </tr>

    
    
  </table>
  </center>
  </form>
      </div>
    </div>
  </div>

  
</body>

</html>

