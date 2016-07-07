<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$myusername=mysqli_real_escape_string($conn,$_POST['username']); 
	$mypassword=mysqli_real_escape_string($conn,$_POST['password']); 
	
		
	$sql = "SELECT ID, Email, UserName FROM User WHERE UserName='$myusername' and Password='$mypassword'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		session_register("myusername");
		$_SESSION['login_user']=$myusername;
		header("location: welcome.php");
	}else{
		$error="Your Login Name or Password is invalid";
	}

}

?>