<?php

$sitecode = "A110";			// 가상주민번호서비스 고객사이트 구분코드 (한국신용평가정보에서 발급한 사이트 코드)
$sitepasswd = "63149665";	// 가상주민번호서비스 고객사이트 비밀번호 (한국신용평가정보에서 발급한 사이트 비밀번호)

$cb_encode_path = "/jellypod/KisinfoIPINInterop";		// 절대경로/모듈명
$strJumin = "";											// 사용자 주민번호
$strType = "JID";										// 값을 변경하시면 안됩니다.

$ReturnData = $cb_encode_path."^".$sitecode."^".$sitepasswd."^".$strType."^".$strJumin;
echo "ReturnData=($ReturnData)<BR><BR>";

// 데이타를 파싱합니다. (구분자는 ^ 입니다.)
$arrData = split("\^", $ReturnData);
$iCount = count($arrData);

if ($iCount = 3){
	echo "0처리일시 = [$arrData[0]]<BR>";
	echo "1리턴코드 = [$arrData[1]]<BR>";			// 리턴코드 : 1 외에는 에러입니다.
	echo "2중복가입 확인값(64bit) = [$arrData[2]]<BR>";
}

?>