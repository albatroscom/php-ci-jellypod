<?php

$url = "http://up1.pandora.tv/jellypod/GJellyPodUpLoad.dll/upload"; //upload

// File you want to upload/post
//
$post_data['filename'] ="1_1375630308962_TIcRlEC10f61W.mp3";
//$post_data['vodfile'] = "@".realpath("./1_1375624279999_PvoKd710QBLhw.mp3").";type=video/mp4";
//$post_data['vodfile'] = "@".realpath("./1_1375624279999_PvoKd710QBLhw.mp3");
//$post_data['vodfile'] = "@1_1375624279999_PvoKd710QBLhw.mp3;type=video/mp4";
$post_data['vodfile'] = "@1_1375624279999_PvoKd710QBLhw.mp3";
//$post_data = array('vodfile' => "@1_1375624279999_PvoKd710QBLhw.mp3");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: multipart/form-data'));
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//
$response = curl_exec($ch);
//
echo $response;

exit;
?>