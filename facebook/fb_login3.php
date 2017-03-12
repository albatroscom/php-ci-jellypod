<?php
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require './src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '132046807005033',
  'secret' => '7f8c15d17f1dcf8e52a224acfbf7218d',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}


// Login or logout url will be needed depending on current user state.
/*
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $loginUrl = $facebook->getLoginUrl();
}
*/
if ($user) {
	$action = "http://www.jellypod.com/?c=joinstep";
}else{
  $loginUrl = $facebook->getLoginUrl();

	$action = $loginUrl;
}



// This call will always work since we are fetching public data.
$naitik = $facebook->api('/naitik');

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">	

    <title>Facebook 로그인</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>


      <!--div>
        <a href="<?php echo $loginUrl; ?>"><img src="http://imgcdn.pandora.tv/jellypod/images/sub/face_login.gif" alt="facebook으로 가입하기" class="mai"></a>
      </div-->
<?	if ($user) {?>
	<form method=post action="<?=$action?>" name="frm">
		<input type="hidden1" name="snstype" value="fb">
		<input type="hidden1" name="fb_uid" value="<?= $_SESSION['fb_132046807005033_user_id']?>">
		<input type="hidden1" name="fb_name" value="<?=$user_profile['name']?>">
		<input type="hidden1" name="fb_username" value="<?=$user_profile['username']?>">
		<input type="hidden1" name="fb_birthday" value="<?=$user_profile['birthday']?>">
		<input type="hidden1" name="fb_email" value="<?=$user_profile['email']?>">
	</form>

	<SCRIPT LANGUAGE="JavaScript">
	<!--
	//	frm.submit();
	//-->
	</SCRIPT>
	
<?}else{?>
	<script language="javascript">
	<!--
		location.href="<?=$loginUrl?>";
	//-->
	</script>
<?}?> 

  </body>
</html>
