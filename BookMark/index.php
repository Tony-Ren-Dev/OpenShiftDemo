<!doctype html>


<html lang="en">
<?php
include "controller.php";
echo get_client_ip();
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Bookmark</title>


    <form  method="post">
	Input Web Link
    <input type="text" name="my_html_input_tag" value="<?php echo $WebLinkName;?>"  >
    <input type="submit" name="insert" value="insert">
   <br/>
   
	
	<?php 
		if(isset($message)){
			echo $message;
			//echo $_POST['my_html_input_tag'];
			//echo $WebLinkName;
			echo generateRandomString().$t;
			echo getTitle($WebLinkName);
		}
	?>
	
	
	
    </form>

</head>
<body>


</body>
</html>
