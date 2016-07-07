
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("config.php");
include("MainController.php");

/*
$sql = "SELECT ID, Email, UserName FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["Email"]. " " . $row["UserName"] . "<br>";
     }
} else {
     echo "0 results";
}
*/
//$conn->close();
?>  


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Login Page</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="wrapper">
 
    <form class="form-signin" action="" method="post" > 
	
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Login</a></li>
    <li><a data-toggle="tab" href="#menu1">Register</a></li>
	<li><a data-toggle="tab" href="#menu2">Other Account</a></li>
  </ul>
  <div class=" tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="UserName/Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" value=" Submit " >Login</button>   
	  <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	  
	  
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
	 <div id="menu2" class="tab-pane fade">
      <h3>Login As</h3>
		   <a href="http://tony-renhk.rhcloud.com/SFDC/">
			<img border="0" alt="W3Schools" src="http://raw.githubusercontent.com/TonyRenHK/TonyRenHK/master/Image/salesforce.png" width="100" height="100">
			</a>

    </div>
	
  </div>
  
     
    </form>
	
  </div>
  
  

</body>
</html>
