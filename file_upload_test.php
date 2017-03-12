<?

	if ($_FILES['img_url']['size'] > 0 )	{
		 // ftp 계정 정보
		 $ftp_host1 = "img1.pandora.tv";
		 $ftp_host2 = "img2.pandora.tv";
		//$ftp_id  = $imgcdn_account["id"][0];
		//$ftp_pass = $imgcdn_account["pass"][0];
		 $ftp_id	= "ptvadm";
		 $ftp_pass	= "dnfxmfk88TV";
		 $ftp_root = "/home/www/htdocs/static/remain/";

		 //ptvadm
		 //dnfxmfk88TV  
		 
		if ($_FILES['img_url']['size']>0) {
			 $img_url_name = img_file_upload ($_FILES['img_url'], 'ptvabout_masonry', $ftp_root, $ftp_host1, $ftp_id, $ftp_pass);   
			 $img_url_name = img_file_upload ($_FILES['img_url'], 'ptvabout_masonry', $ftp_root, $ftp_host2, $ftp_id, $ftp_pass);   
		}

	} 

	function img_file_upload ($obj_file, $save_name, $ftp_root, $ftp_host, $ftp_id, $ftp_pass) { 

		// if ($obj_file['size'] > 0) {
			$img_file_name = $obj_file['tmp_name'];
			$img_file_name2 = $obj_file['name'];
			$img_extention = strtolower(substr(strrchr($img_file_name2,"."),1));
			$up_img_name = $save_name."_".time().".".$img_extention;

			// ftp 접속
			$ftp_connect = ftp_connect($ftp_host, 21);  if (!$ftp_connect) 
			{
				print "ftp : " . $ftp_host . "로 접속할 수 없습니다."; 
				exit;
			}

			// ftp 로그인
			$ftp_logon = ftp_login($ftp_connect, $ftp_id, $ftp_pass);  
			if (!$ftp_logon) {
				print "ftp 계정정보를 확인해 주세요!!";   
				exit;  
			} 
			
			// turn passive mode off  
			ftp_pasv($ftp_connect, false);  
			if (!ftp_chdir($ftp_connect, $ftp_root)) {
				print "ftp 서버 디렉터리 정보를 확인해 주세요!! <br />" . $ftp_root;   
				exit;  
			}
			
			ftp_put($ftp_connect, $up_img_name, $img_file_name, FTP_BINARY);    
			
			return $up_img_name;  
			
		// }

	}


?>