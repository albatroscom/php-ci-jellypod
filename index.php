<?php
//start session
//session_start();

//just simple session reset on logout click
if($_GET["reset"]==1)
{
	//session_destroy();

	//all cookie unset;
	$past = time() - 3600; 
//	foreach ( $_COOKIE as $key => $value ) 
//	{
//			setcookie( $key, $value, $past, '/' ); 
//	} 
	setcookie('token',"", 0, "/", ".pandora.tv");
	setcookie('token_secret',"", 0, "/", ".pandora.tv");
	setcookie("status", "", 0, "/", ".pandora.tv");
	setcookie("request_vars", "", 0, "/", ".pandora.tv");

//	if (isset($_SERVER["HTTP_COOKIE"])) {
//		$cookies = explode(';', $_SERVER["HTTP_CODE"]);
//
//		foreach($cookies as $cookies) {
//			$parts = explode('=', $cookie);
//			$name  = trim($parts[0]);                                                                
//			setcookie($name, '', $past);
//			setcookie($name, '', $past, '/');
//		}
//		
//	}
	print_r($_COOKIE);

	header('Location: ./index.php');
	exit;
}

// Include config file and twitter PHP Library by Abraham Williams (abraham@abrah.am)
include_once("config.php");
include_once("inc/twitteroauth.php");
?>
<html>
<head>
<title>Sign-in with Twitter</title>
<style type="text/css">
<!--
.wrapper{width:600px; margin-left:auto;margin-right:auto;}
.welcome_txt{
	margin: 20px;
	background-color: #EBEBEB;
	padding: 10px;
	border: #D6D6D6 solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.tweet_box{
	margin: 20px;
	background-color: #FFF0DD;
	padding: 10px;
	border: #F7CFCF solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.tweet_box textarea{
	width: 500px;
	border: #F7CFCF solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.tweet_list{
	margin: 20px;
	padding:20px;
	background-color: #E2FFF9;
	border: #CBECCE solid 1px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
}
.tweet_list ul{
	padding: 0px;
	font-family: verdana;
	font-size: 12px;
	color: #5C5C5C;
}
.tweet_list li{
	border-bottom: silver dashed 1px;
	list-style: none;
	padding: 5px;
}
-->
</style>
</head>
<body>
<div class="wrapper">
<?php
$user_vars = json_decode($_COOKIE['request_vars'], true);

if(isset($_COOKIE['status']) && $_COOKIE['status']=='verified') 
{	//Success, redirected back from process.php with varified status.
	//retrive variables

//	$screenname 		= $_SESSION['request_vars']['screen_name'];
//	$twitterid 			= $_SESSION['request_vars']['user_id'];
//	$oauth_token 		= $_SESSION['request_vars']['oauth_token'];
//	$oauth_token_secret = $_SESSION['request_vars']['oauth_token_secret'];

	$screenname 		= $user_vars['screen_name'];
	$twitterid 			= $user_vars['user_id'];
	$oauth_token 		= $user_vars['oauth_token'];
	$oauth_token_secret = $user_vars['oauth_token_secret'];

	//Show welcome message
	echo '<div class="welcome_txt">Welcome <strong>'.$screenname.'</strong> (Twitter ID : '.$twitterid.'). <a href="index.php?reset=1">Logout</a>!</div>';
	$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $oauth_token, $oauth_token_secret);
	
	//see if user wants to tweet using form.
	if(isset($_POST["updateme"])) 
	{
		//Post text to twitter
		$my_update = $connection->post('statuses/update', array('status' => $_POST["updateme"]));
		die('<script type="text/javascript">window.top.location="index.php"</script>'); //redirect back to index.php
	}
	
	//show tweet form
	echo '<div class="tweet_box">';
	echo '<form method="post" action="index.php"><table width="200" border="0" cellpadding="3">';
	echo '<tr>';
	echo '<td><textarea name="updateme" cols="60" rows="4"></textarea></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<td><input type="submit" value="Tweet" /></td>';
	echo '</tr></table></form>';
	echo '</div>';
	
	
		//Get latest tweets
		$my_tweets = $connection->get('statuses/user_timeline', array('screen_name' => $screenname, 'count' => 5));
		/* echo '<pre>'; print_r($my_tweets); echo '</pre>'; */
		
		echo '<div class="tweet_list"><strong>Latest Tweets : </strong>';
		echo '<ul>';
		foreach ($my_tweets  as $my_tweet) {
			echo '<li>'.$my_tweet->text.' <br />-<i>'.$my_tweet->created_at.'</i></li>';
		}
		echo '</ul></div>';
		
}else{
	//login button
	echo '<a href="process.php"><img src="images/sign-in-with-twitter-l.png" width="151" height="24" border="0" /></a>';
}

?>
</div>
</body>
</html>
