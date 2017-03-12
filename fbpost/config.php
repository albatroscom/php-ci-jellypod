<?php
include_once("inc/facebook.php"); //include facebook SDK
 
######### edit details ##########
$appId = '355911207854367'; //Facebook App ID
$appSecret = '874faff8385b954b2ade11304cc1b3a0'; // Facebook App Secret
$return_url = 'http://fancast.pandora.tv/jellypod/fbpost/process.php';  //return url (url to script)
$homeurl = 'http://fcdev.pandora.tv/?c=join';  //return to home
$fbPermissions = 'publish_stream,manage_pages';  //Required facebook permissions
##################################

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret
));

$fbuser = $facebook->getUser();
?>