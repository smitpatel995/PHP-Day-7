<?php

	include('../db-connection.php');

	$a = $_POST['text1'];
	$b = $_POST['text2'];
	$c = $_POST['text3'];
	$d = $_POST['text4'];
	$e = $_POST['text5'];
	$f = $_POST['text6'];
	$g = $_POST['text7'];	
	$h = $_POST['text8'];
	$i = $_POST['text9'];
	$j = $_POST['text10'];



	$q = mysqli_query($connection, "insert into tbl_user (User_name,user_gender,user_dob,user_email,user_mobile,user_address,user_password,user_area,user_pincode,user_bloodgroup) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')") or die ("Error" . mysqli_error($connection));
	
	if($q){
		echo "<script>alert('Data Added in Database')</script>";
		//redirect the page where you want 
		header("location: ../index.php");
	}

?>
