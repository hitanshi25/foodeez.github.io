<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "hitanshibalani.25@gmail.com", "Feedback Form Results",
    $message, "From: $email" );
  
?>
