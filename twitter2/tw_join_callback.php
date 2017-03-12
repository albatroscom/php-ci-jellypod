<?php
/**
 * @file
 * 
 */

/* Load required lib files. */
session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config.php');

function twitteroauth_row($method, $response, $http_code, $parameters = '') {
/*  echo '<tr>';
//  echo "<td><b>{$method}</b></td>";
  switch ($http_code) {
    case '200':
    case '304':
      $color = 'green';
      break;
    case '400':
    case '401':
    case '403':
    case '404':
    case '406':
      $color = 'red';
      break;
    case '500':
    case '502':
    case '503':
      $color = 'orange';
      break;
    default:
      $color = 'grey';
  }
  echo "<td style='background: {$color};'>{$http_code}</td>";
  if (!is_string($response)) {
    $response = print_r($response, TRUE);
  }
  if (!is_string($parameters)) {
    $parameters = print_r($parameters, TRUE);
  }
  echo '<td>', strlen($response), '</td>';
  echo '<td>', $parameters, '</td>';
  echo '</tr><tr>';

  echo '<td colspan="4"><hr>', $response, '...</td>';
  echo '</tr>';

*/
  if (!is_string($parameters)) {
    $parameters = print_r($parameters, TRUE);
  }
  return $response;
}

/* If access tokens are not available redirect to connect page. */
/*if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
    header('Location: ./clearsessions.php');
}
*/

if (isset($_REQUEST['oauth_token']) && $_SESSION['oauth_token'] !== $_REQUEST['oauth_token']) {
  $_SESSION['oauth_status'] = 'oldtoken';
  header('Location: ./clearsessions.php');
}

/* Get user access tokens out of the session. */
$access_token = $_SESSION['access_token'];

/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

/* Request access tokens from twitter */
$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);


/* users/show */
$method = 'users/show/' . $access_token["user_id"];
$arr =  twitteroauth_row($method, $connection->get($method), $connection->http_code);

	function objectToArray($d) {
		if (is_object($d)) {
			// Gets the properties of the given object
			// with get_object_vars function
			$d = get_object_vars($d);
		}
 
		if (is_array($d)) {
			/*
			* Return array converted to object
			* Using __FUNCTION__ (Magic constant)
			* for recursive call
			*/
			return array_map(__FUNCTION__, $d);
		}
		else {
			// Return array
			return $d;
		}
	}


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <TITLE> 트윗터 로그인 </TITLE>
 </HEAD>

 <BODY>

	<FORM METHOD=POST ACTION="http://www.jellypod.com/?c=joinstep_link" name="frm">
		<input type="hidden" name="snstype" value="tw">
		<input type="hidden"  name="id" value="<?=$arr->id?>">
		<input type="hidden"  name="name" value="<?=$arr->name?>">
		<input type="hidden"  name="screen_name" value="<?=$arr->screen_name?>">
		<input type="hidden"  name="profile_image_url" value="<?=$arr->profile_image_url?>">

	</FORM>
	<SCRIPT LANGUAGE="JavaScript">
	<!--
		frm.submit();
	//-->
	</SCRIPT>
 </BODY>
</HTML>
