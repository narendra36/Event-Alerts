<?php
	
	session_start();
	$user_name="iamadmin";
	$pwd="onlyadmin";
	
	if ($_POST['adminuser']==$user_name && $_POST['apassword']==$pwd) {
		
		$_SESSION['adminlogin']=$user_name;
			header("location: ./adminPanel.php");
		}
		else{
			echo "<script type='text/javascript'>alert('Username or Password is incorrect');window.location.href='../AdminLogin.php';</script>";
		}		
	
	

?>