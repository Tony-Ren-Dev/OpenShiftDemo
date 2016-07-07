<?php
//include('index2.php');

session_start();
$acctoken= $_SESSION['access_token'];
$out_url='https://test.salesforce.com/services/oauth2/revoke?token='.$acctoken;

unset($_SESSION['access_token']); 


if(session_destroy())
{
	
header("Location: ".$out_url);
}
?>