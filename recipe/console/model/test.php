<?php 
	require 'autoload.php';
	$obj = new Helper;
	$data = array(
		"fullname" => "krunal",
		"mobileno" => "9687451968",
		"username" => "k@gmail.com",
		
	);
	$pk = array(
		"mobileno" => "9687451968",
		"username" => "k@gmail.com",
		

		
	);

	//$obj->insertData('product',$data,1,$pk);

	echo "<pre>";
	$data = $obj -> multiple_join(1);

	print_r($data);
	
	

	
	
?>

