<? 
	$origin_url		= $_REQUEST["down_url"];
	$chn_type_code	= $_REQUEST["chn_type_code"];
	$vtype			= $_REQUEST["vtype"];

	if( stristr($origin_url, "jellypod.com") ) {
		$origin_url = str_replace("trans-idx.jellypod.com/jellypod2.com/audiouhd/jellypod", "relay.jellypod.com/jellypodminirss.com/audiouhd/jellypod", $origin_url);
	}

	$full_url	= str_replace("http://", "", $origin_url);
	$full_url_arr	= explode("/", $full_url);

	for ($i = 1; $i < count($full_url_arr); $i++) {
		$last_url .= "/" . $full_url_arr[$i];
		if ($i+1 == count($full_url_arr)) {
			$last_file_name = $full_url_arr[$i];
		}
	}
	$filename = $last_file_name; 

//echo $full_url_arr[0];
//exit;

	if( stristr($full_url, "jellypod.com") ) {
		$fp = fsockopen('relay.jellypod.com',80,$errno,$errstr,5); 

		if ( $fp ) { 
			$out = 'GET '.$last_url.' HTTP/1.0'."\r\n"; 
			$out.= 'Host: relay.jellypod.com'."\r\n"; 
			$out.= 'Connection: Close'."\r\n\r\n"; 
			fwrite($fp,$out); 
			$content = ''; 
			while ( !feof($fp) ) $content.= fread($fp,2000); 
			fclose($fp); 
			$content = substr($content,strpos($content,"\r\n\r\n")+4); 
			header('Content-Type: application/octet-stream'); 
			header('Content-Disposition: attachment; filename="'.$filename.'"'); 
			header('Content-Transfer-Encoding: binary'); 
			header('Content-Length: '.strlen($content)); 
			echo $content; 
		}
	} else {
		header("Content-Type: application/octet-stream"); 
		header("Content-Disposition: attachment; filename=".$filename); 
		header("Content-Transfer-Encoding: binary"); 
		// Open and display the file.. 

		$fh = fopen( $origin_url, 'rb' );  // Set binary for Win even if it's an ascii file, it won't hurt. 
		fpassthru( $fh ); 
		@fclose( $fh );  
	}
?>  
