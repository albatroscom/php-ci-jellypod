<html>
<head>
<title>휴대폰 인증</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<?php


//	print_r($_REQUEST);
/*
	Array
	(
		[mobile2] => 6589
		[mobile3] => 4037
		[rname_auth] => 3
		[rname_name] => 백성구
		[rname_ssn1] => 810703
		[gender] => 1
		[yy] => 1981
		[mm] => 07
		[dd] => 03
		[mobile_auth] => y
		[mobile_button] => 
		[__utma] => 46208444.60171147.1371463513.1371463513.1371529952.2
		[__utmz] => 46208444.1371463513.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)
		[__utmb] => 46208444.2.10.1371529952
		[__utmc] => 46208444
	)
*/
	$val_mobile1		= $_REQUEST["mobile1"];
	$val_mobile2		= $_REQUEST["mobile2"];
	$val_mobile3		= $_REQUEST["mobile3"];
	$val_rauth			= $_REQUEST["rname_auth"];
	$val_rname			= $_REQUEST["rname_name"];
	$val_rssn1			= $_REQUEST["rname_ssn1"];
	$val_gender			= $_REQUEST["gender"];
	$val_yy				= (int)$_REQUEST["yy"];
	$val_mm				= (int)$_REQUEST["mm"];
	$val_dd				= (int)$_REQUEST["dd"];
	$val_mobile_auth	= $_REQUEST["mobile_auth"]; 

?>

<!-- form name="inc_frm2" id="inc_frm2" method="post" style="margin:0px;">
<?if($val_result == "1"){?>
<input type='hidden' name="uresult" id="uresult" value="<?=$val_result?>">
<input type='hidden' name='ipin' id='ipin' value="2">
<input type='hidden' name='uname' id='uname' value="<?=$val_uanme?>">
<input type='hidden' name='ubirth' id='ubirth' value="<?=$val_ubirth?>">
<input type='hidden' name='ugender' id='ugender' value="<?=$val_ugender?>">
<input type='hidden' name='rname_name' id='rname_name' value="<?=$val_rname?>">
<input type='hidden' name='nickname' id='nickname' value="<?=$val_nickname?>">
<input type='hidden' name='vDiscrNo' id='vDiscrNo' value="<?=$val_vDiscrNo?>">
<input type='hidden' name='discrHash' id='discrHash' value="<?=$val_discrHash?>">
<input type='hidden' name='ciVersion' id='ciVersion' value="<?=$val_ciVersion?>">
<input type='hidden' name='ciscrHash' id='ciscrHash' value="<?=$val_ciscrHash?>">
<?}?>
</form -->


<script language=javascript>
	document.domain = "jellypod.com";
	//document.inc_frm2.action = "http://www.jellypod.com/jellypod/ipin_test.php";
	//document.inc_frm2.submit();
	//opener.ipinWrite('<?=$val_uanme?>','<?=$val_ubirth?>','<?=$val_ugender?>');
	opener.parent.document.info_frm.mobile1.value = "<?=$val_mobile1?>";
	opener.parent.document.info_frm.mobile2.value = "<?=$val_mobile2?>";
	opener.parent.document.info_frm.mobile3.value = "<?=$val_mobile3?>";
	opener.parent.document.info_frm.rname_auth.value = "<?=$val_rauth?>";
	opener.parent.document.info_frm.rname_name.value = "<?=$val_rname?>";
	opener.parent.document.info_frm.rname_ssn1.value = "<?=$val_rssn1?>";
	opener.parent.document.info_frm.gender.value = "<?=$val_gender?>";
	opener.parent.document.info_frm.maker_birth1.value = "<?=$val_yy?>";
	opener.parent.document.info_frm.maker_birth2.value = "<?=$val_mm?>";
	opener.parent.document.info_frm.maker_birth3.value = "<?=$val_dd?>";
	opener.parent.document.info_frm.mobile_auth.value = "<?=$val_mobile_auth?>";
	opener.parent.document.getElementById("userConfirmSpan").style.display = "";
	alert('휴대폰 인증이 정상적으로 처리되었습니다.');
	self.close();
</script>


</HTML>