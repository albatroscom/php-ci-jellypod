<?php

//phpinfo();

/*
$file_name_with_full_path = realpath('http://imgadm.pandora.tv/jellyadm/crawling2/ex.csv');
$post = array('userfile'=>'@'.$file_name_with_full_path);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://dev.jellypod.com/?c=crul_test");
curl_setopt($ch, CURLOPT_POST,1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
$result = curl_exec($ch);

curl_close($ch);

//execute the API Call
$returned_data = curl_exec($curl_handle);
*/


/*
$postFields = array(); 

//files
$postFields['file'] = "@http://imgadm.pandora.tv/jellyadm/crawling2/ex.csv";

//get the extension of the image file
$tumbnailExtention = preg_replace('/^.*\.([^.]+)$/D', '$1', $thumbnailPath);
$postFields['thumbnail'] = "@$thumbnailPath;type=image/$tumbnailExtention";

//metaData
$postFields['title'] = "$title";
$postFields['description'] = "$description";
$postFields['tags'] = "$tags";
$postFields['licenseinfo'] = "$licenseinfo";
$postFields['token'] = "$userToken"; 

$curl_handle = curl_init();

curl_setopt($curl_handle, CURLOPT_URL, "http://thumb1.pandora.tv/test");
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_POST, true);
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $http_post_fields); 

//execute the API Call
$returned_data = curl_exec($curl_handle);

*/


/*
//핸들을 생성한다.
$ch = curl_init();


//URL을 설정한다.
curl_setopt($ch, CURLOPT_URL, "http://www.naver.com/");

//실행한다.
$html = curl_exec($ch);

//핸들을 닫는다.
curl_close($ch);

*/


//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_HEADER, 0);
//    curl_setopt($ch, CURLOPT_VERBOSE, 0);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
//    curl_setopt($ch, CURLOPT_URL, _VIRUS_SCAN_URL);
//    curl_setopt($ch, CURLOPT_POST, true);
//    // same as <input type="file" name="file_box">
//    $post = array(
//        "file_box"=>"@http://imgadm.pandora.tv/jellyadm/crawling2/ex.csv",
//    );
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $post); 
//    $response = curl_exec($ch);


// DATA SUBMIT

// URL on which we have to post data
//$url = "http://localhost/tutorials/post_action.php";
//$url = "http://dev.jellypod.com/?c=curl_test";

//$url = "http://imgadm.pandora.tv";
//$url = "http://dev.jellypod.com/?c=curl_test";
//$url = "http://www.pandora.tv/curl_upload.php";

$url = "http://up1.pandora.tv/jellypod/GJellyPodUpLoad.dll/upload"; //upload

//$url = "http://up.pandora.tv/jellypod/GJellyPodUpLoad.dll/save";	//save

//$url = "http://imgadm.pandora.tv/jellyadm/crawling2/curl_upload.php";

// Any other field you might want to catch
//$post_data['name'] = "filename";

// File you want to upload/post
$post_data['vodfile'] = "@1_1375624279999_PvoKd710QBLhw.mp3";

// Initialize cURL
//$ch = curl_init();
// Set URL on which you want to post the Form and/or data

//	curl_setopt($ch, CURLOPT_URL, $url);
//	// Data+Files to be posted
//
//	curl_setopt($ch, CURLOPT_POST, true);
//	// Execute the request
//
//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//	// For Debug mode; shows up any error encountered during the operation
//
//	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: multipart/form-data'));
//
//	//curl_setopt($ch, CURLOPT_HTTPHEADER, array('multipart/form-data;', 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36')); 
//
//	//curl_setopt($ch, CURLOPT_VERBOSE, 1);
//	// Execute the request
//
//	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//
//	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//	// Pass TRUE or 1 if you want to wait for and catch the response against the request made



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: multipart/form-data'));
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible;)");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);



$response = curl_exec($ch);

echo $response;

// Just for debug: to see response


/*
$postFields['file'] = "http://cf1.iblug.com/contents/profile/facttv00008_1370670352768.jpg";
$postFields['thumbnail'] = "http://cf1.iblug.com/contents/profile/facttv00008_1370670352768.jpg";
 
//metaData
$postFields['title'] = "제목입니다.";
$postFields['description'] = "설명입니다.";
$postFields['tags'] = "태그";
$postFields['licenseinfo'] = "123123";
$postFields['token'] = "4546";
 
$curl_handle = curl_init();
 
curl_setopt($curl_handle, CURLOPT_URL, "http://imgadm.pandora.tv/jellyadm/crawling2/curl_upload.php");
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_POST, true);
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $http_post_fields);
 
//execute the API Call
$returned_data = curl_exec($curl_handle);
*/


?>