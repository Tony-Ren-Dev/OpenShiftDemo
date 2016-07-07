<?php

/***********************************************************************************

A minimal example showing how to handle the OAuth login process and make API calls
using the Salesforce REST interface in PHP

By Pete Warden, October 28th 2010

Freely reusable with no restrictions

************************************************************************************/

// You need to set these three to the values for your own application
define('CONSUMER_KEY', '3MVG9MHOv_bskkhTbcpwNojvxOS.I1etdoehrB063cFNxE6hyjgic0kNHFI.kLaJdQEYn5ZuoKBwtvmT2xzgH');
define('CONSUMER_SECRET', '655808579299626372');
define('REDIRECT_URI', 'https://tony-renhk.rhcloud.com/SFDC/index2.php');

define('LOGIN_BASE_URL', 'https://test.salesforce.com/');

// This example uses PHP sessions to save the authorization tokens. If you plan on
// deploying across multiple machines behind a load-balancer, be aware you'll need
// to use something more sophisticated
session_start();


// If we aren't yet authorized, so either we need to send the user to the login page
// or they've just logged in and Salesforce is giving us the tokens we need

  
        $auth_url = LOGIN_BASE_URL
            .'services/oauth2/authorize?response_type=code'
            .'&client_id='.CONSUMER_KEY
			.'&redirect_uri='.REDIRECT_URI
			.'&state=mystate';

			
        // Redirect to the authorization page
        header('Location: '.$auth_url);
        
        // Exit early, since we don't want to do any more until the user's logged in
        exit();
   
?>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>PHP Sample Code for the Salesforce REST API --1</title>
</head>
<body>

</body>
</html>