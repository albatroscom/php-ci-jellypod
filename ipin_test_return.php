<?php

/*
	Array
(
    [ipin] => 2
    [rname_name] => 諛깆꽦援?
    [nickname] => 諛깆꽦援?
    [vDiscrNo] => 9613204617284
    [discrHash] => MC0GCCqGSIb3DQIJAyEA27FxJE3yoe98ojtvS6ck0CrFh4Qlr10/2GZJv5fpU0I=
    [ciVersion] => 00000000
    [ciscrHash] => 
    [PHPSESSID] => rm6f9aofbbgu2ogsfjgg9ekqc4
    [__utmc] => 46208444
    [__utma] => 46208444.1502989842.1371445474.1371445474.1371448542.2
    [__utmz] => 46208444.1371445474.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)
    [__utmb] => 46208444.13.10.1371448542
)
*/

//	print_r($_REQUEST);
	$val_result		= $_REQUEST["uresult"];
	$val_uanme		= $_REQUEST["uname"];
	$val_ubirth		= $_REQUEST["ubirth"];
	$val_ugender	= $_REQUEST["ugender"];
	$val_ipin		= $_REQUEST["ipin"];
	$val_rname		= $_REQUEST["rname_name"];
	$val_nickname	= $_REQUEST["nickname"];
	$val_vDiscrNo	= $_REQUEST["vDiscrNo"];
	$val_discrHash	= $_REQUEST["discrHash"];
	$val_ciVersion	= $_REQUEST["ciVersion"];
	$val_ciscrHash	= $_REQUEST["ciscrHash"];

?>
<html>
<head>
<title>IPIN 인증</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>


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
//	document.inc_frm2.action = "http://www.jellypod.com/jellypod/ipin_test.php";
//	document.inc_frm2.submit();

	<?if($val_result == "1"){?>
	//opener.ipinWrite('<?=$val_uanme?>','<?=$val_ubirth?>','<?=$val_ugender?>');
	opener.document.info_frm.ipin.value = "2";
	opener.document.info_frm.rname_name.value = "<?=$val_rname?>";
	opener.document.info_frm.nickname.value = "<?=$val_nickname?>";
	opener.document.info_frm.vDiscrNo.value = "<?=$val_vDiscrNo?>";
	opener.document.info_frm.discrHash.value = "<?=$val_discrHash?>";
	opener.document.info_frm.ciVersion.value = "<?=$val_ciVersion?>";
	opener.document.info_frm.ciscrHash.value = "<?=$val_ciscrHash?>";
	opener.document.getElementById("userConfirmSpan").style.display = "";
	alert('i-pin 인증이 정상적으로 처리되었습니다.');
	<?}?>

	self.close();
</script>


</HTML>