<?php
include('index2.php');

session_start();
$acctoken= $_SESSION['access_token'];
echo $acctoken;
if(session_destroy())
{
	$out_url='https://test.salesforce.com/services/oauth2/revoke?token='.$acctoken;
header("Location: ".$out_url);
}
?>