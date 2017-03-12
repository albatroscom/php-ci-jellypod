<?php
session_start();
include_once("config.php");
include_once("inc/twitteroauth.php");

if (isset($_REQUEST['oauth_token']) && $_COOKIE['token']  !== $_REQUEST['oauth_token']) {

	// if token is old, distroy any session and redirect user to index.php
	//session_destroy();

	setcookie($_COOKIE['token']);
	setcookie($_COOKIE['token_secret']);
	header('Location: ./index.php');
	
} else if (isset($_REQUEST['oauth_token']) && $_COOKIE['token'] == $_REQUEST['oauth_token']) {

	// everything looks good, request access token
	//successful response returns oauth_token, oauth_token_secret, user_id, and screen_name
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_COOKIE['token'] , $_COOKIE['token_secret']);
	$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);

	//print_r($access_token);
	//exit;

	if($connection->http_code=='200')
	{
		//redirect user to twitter
		//$_SESSION['status'] = 'verified';
		//$_SESSION['request_vars'] = $access_token;

		setcookie("status", 'verified', time() + 60 * 60 * 24 * 1, "/", ".jellypod.com");
		setcookie("request_vars", json_encode($access_token), time() + 60 * 60 * 24 * 1, "/", ".jellypod.com");
		
		// unset no longer needed request tokens
//		unset($_SESSION['token']);
//		unset($_SESSION['token_secret']);
		setcookie($_COOKIE['token']);
		setcookie($_COOKIE['token_secret']);

		//header('Location: ./index.php'); //2013.05.15 annotate
		//die("<script type='text/javascript'>window.close();opener.location.href='/?c=joinstep&m=step2';</script>");
		die("<script type='text/javascript'>window.close();opener.location.href='/?c=index';</script>");

	}else{

		die("error, try again later!");

	}
		
} else {

	if(isset($_GET["denied"]))
	{
		header('Location: ./index.php');
		die();
	}

	//fresh authentication
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token = $connection->getRequestToken(OAUTH_CALLBACK);
	
	//received token info from twitter
	//$_SESSION['token'] 			= $request_token['oauth_token'];
	//$_SESSION['token_secret'] 	= $request_token['oauth_token_secret'];

	setcookie("token",	$request_token['oauth_token'], time() + 60 * 60 * 24 * 1, "/", ".jellypod.com");
	setcookie("token_secret", $request_token['oauth_token_secret'], time() + 60 * 60 * 24 * 1, "/", ".jellypod.com");
	
	// any value other than 200 is failure, so continue only if http code is 200
	if($connection->http_code=='200')
	{
		//redirect user to twitter
		$twitter_url = $connection->getAuthorizeURL($request_token['oauth_token']);
		header('Location: ' . $twitter_url); 
	}else{
		die("error connecting to twitter! try again later!");
	}
}
?>

