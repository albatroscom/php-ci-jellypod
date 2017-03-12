<pre>
<?php
 require_once '../src/facebook.php';

// configuration
 $appid = '355911207854367';
 $appsecret = '874faff8385b954b2ade11304cc1b3a0';
 $pageId = 'myoutlets';
//$pageId = 'jellypod';
 $msg = 'Nice script for posting to Facebook from PHP program';
 $title = 'Tips4php.net';
 $uri = 'http://tips4php.net/2010/12/automatic-post-to-facebook-from-php-script/';
 $desc = 'Learn how to build a script that automatically can post messages from a PHP script to Facebook';
 $pic = 'http://cdn.tips4php.net/wp-content/uploads/2010/12/post_facebook_php.png';
 $action_name = 'Go to Tips4php';
 $action_link = 'http://www.tips4php.net';

$facebook = new Facebook(array(
 'appId' => $appid,
 'secret' => $appsecret,
 'cookie' => false,
 ));

$user = $facebook->getUser();

// Contact Facebook and get token
 if ($user) {
 // you're logged in, and we'll get user acces token for posting on the wall
 try {
 $page_info = $facebook->api("/$pageId?fields=access_token");
 if (!empty($page_info['access_token'])) {
 $attachment = array(
 'access_token' => $page_info['access_token'],
 'message' => $msg,
 'name' => $title,
 'link' => $uri,
 'description' => $desc,
 'picture'=>$pic,
 'actions' => json_encode(array('name' => $action_name,'link' => $action_link))
 );

$status = $facebook->api("/$pageId/feed", "post", $attachment);
 } else {
 $status = 'No access token recieved';
 }
 } catch (FacebookApiException $e) {
 error_log($e);
 $user = null;
 }
 } else {
 // you're not logged in, the application will try to log in to get a access token
// header("Location:{$facebook->getLoginUrl(array('scope' => 'photo_upload,user_status,publish_stream,user_photos,manage_pages'))}");
echo "no user account";
 }

echo $status;
 ?>

