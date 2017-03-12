<!DOCTYPE HTML>
	<script>
		function loginGo() {
			var hashLocate = location.href;
			location.href = "/sign/signup.ptv?retUrl=" + escape(hashLocate);
		}
		var chInfoJson = {"chno":"","ch_userid":"","chname":"","nickname":"","logobase":"","nation":"","mychannel":"","chstate":"","isupload":"","reply":"true","clientLang":"ko","langCode":"40001","skinId":"","prgid":"","upStatus":"","currMenu":"","c1":"00","c2":"0000","ct":"0","retUrl":"","query":""};
	</script>
<html>
<head>
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="expires" content="-1">
<meta http-equiv="pragma" content="no-cache">
<title>세상의 모든 TV :: Pandora.TV</title>

<link rel="stylesheet" href="https://ssl.pandora.tv/sslimg/css/global/sub.css" type="text/css">
<link rel="stylesheet" href="https://ssl.pandora.tv/sslimg/css/global/basic_main.css?v=015" type="text/css" />
<link rel="stylesheet" href="https://ssl.pandora.tv/sslimg/css/global/upload_old.css?v=009" type="text/css">
<link href="https://ssl.pandora.tv/sslimg/css/korea/ContSign_2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://ssl.pandora.tv/sslimg/css/global/gnb.css" type="text/css">

<!--<script type="text/javascript">
	var now_url = unescape(document.URL);
	var regExp_sec = /flvcdn.pandora.tv|flv/gi;
	if (regExp_sec.exec(now_url)) {
		document.URL = "http://www.pandora.tv";
	}
</script>-->
<script type="text/javascript" src="https://ssl.pandora.tv/sslimg/_ptv_all/core/jquery.min.js"></script>
<link href="https://ssl.pandora.tv/sslimg/css/newptv/ptvetc_kr.css" rel="stylesheet" type="text/css">


<script type="text/javascript" src="https://ssl.pandora.tv/www//common/prototype.js"></script>
<script type="text/javascript" src="https://ssl.pandora.tv/www//common/namespace.js"></script>
<script type="text/javascript" src="https://ssl.pandora.tv/www//common/util/pandora.util.merge.js?v=010"></script>
<script type="text/javascript" src="https://ssl.pandora.tv/www//common/util/pandora.util.bagMerge.js"></script>

<!-- save the playlist -->

<!--<script type="text/javascript" src="https://ssl.pandora.tv/www//common/lang/category.ko.js"></script-->
<script type="text/javascript" src="https://ssl.pandora.tv/www//common/lang/main.ko.js"></script>
<script type="text/javascript" src="https://ssl.pandora.tv/www//common/lang/pandora.lang.ko.js"></script>
<script type="text/javascript" src="https://ssl.pandora.tv/www//common/pandora.logo.js?v=031"></script>
<script type="text/javascript" src="https://ssl.pandora.tv/www//search/pandora.search.js?v=038"></script>
<script type="text/javascript" src="https://ssl.pandora.tv/global_member/mod/member.mod.js"></script>


<script language="javascript">
<!--
	document.domain='jellypod.com';

	function kmcisSubmit(){
		kmcisWin = window.open("", "kmcis", 'width=420, height=500, resizable=0, scrollbars=no, status=0, titlebar=0, toolbar=0, left=435, top=250');
		var obj = $('sign_frm');
		obj.action = "https://ssl.pandora.tv/ICERTSecu/jellypod/kmcis_jpd_01.ptv?adult=1";
		obj.target = "kmcis";//"kmcis";
		obj.submit();
		return;
	}

	function smsPopup(){

		var obj = $('sign_frm');
		var objSms = $('reqPCCV4Form');
		var ExistMsg = false;
 
				if(obj.rname_auth.value != 1) {
			if(!ExistMsg) fDisplayMsg('btnConfirm', '', '', '', '실명인증을 하셔야만 SMS인증을 할 수 있습니다.', 'y', '')
			ExistMsg = true;
		} else {
			objSms.name.value = obj.rname_name.value;
			objSms.addVar.value = obj.ch_userid.value;
			objSms.jumin.value = obj.rname_ssn1.value+obj.rname_ssn2.value;

			PCCV4_window = window.open('', 'PCCV4Window', 'width=410, height=460, resizable=0, scrollbars=no, status=0, titlebar=0, toolbar=0, left=435, top=250' );

			if(PCCV4_window == null){ 
				alert(" ※ 윈도우 XP SP2 또는 인터넷 익스플로러 7 사용자일 경우에는 \n    화면 상단에 있는 팝업 차단 알림줄을 클릭하여 팝업을 허용해 주시기 바랍니다. \n\n※ MSN,야후,구글 팝업 차단 툴바가 설치된 경우 팝업허용을 해주시기 바랍니다.");
			}
			
			objSms.action = 'http://www.pandora.tv/sign/pccV4/pccV4_input_popup.ptv';
			objSms.target = 'PCCV4Window';
			objSms.submit();
		}
			}

	// 아이핀 인증 팝업
	function ipinPopup(){
		IPINWindow = window.open('https://ssl.pandora.tv/www/sign/ipin_jellypod/ipin_signup_popup_jp.ptv', 'IPINWindow', 'width=420, height=500, resizable=0, scrollbars=no, status=0, titlebar=0, toolbar=0, left=435, top=250' );

		if(IPINWindow == null){ 
			alert(" ※ 윈도우 XP SP2 또는 인터넷 익스플로러 7 사용자일 경우에는 \n    화면 상단에 있는 팝업 차단 알림줄을 클릭하여 팝업을 허용해 주시기 바랍니다. \n\n※ MSN,야후,구글 팝업 차단 툴바가 설치된 경우 팝업허용을 해주시기 바랍니다.");
		}
	}

	// 주민등록인증 & 아이핀 인증 선택
	function ipinCheck(checkObj){
		if(checkObj == "ipin"){
			$('ipinCss').className = "tabOn";
			$('mobileCss').className = "tabOff";
			$('ipin').style.display = "inline";
			$('mobile').style.display = "none";
			$('mobileText').style.display = "none";
			$('ipinText').style.display = "inline";
			document.sign_frm.ipin.value = 1;
		}else if(checkObj == "mobile"){
			$('ipinCss').className = "tabOff";
			$('mobileCss').className = "tabOn";
			$('ipin').style.display = "none";
			$('mobile').style.display = "inline";
			$('mobileText').style.display = "inline";
			$('ipinText').style.display = "none";
			document.sign_frm.ipin.value = 0;
		} 
	}

	// 아이핀설명
	function ipinHelp(status){
		$('lightBoxBg').style.display = status;
		$('lightBoxBg').style.height = document.documentElement.scrollHeight + 'px';
		$('ipinMeg').style.display = status;
		$('ipinMeg').style.top = document.documentElement.offsetTop + document.documentElement.scrollTop  + 200+ 'px';
		$('ipinMeg').style.left = document.documentElement.scrollWidth  / 2 - 300 + 'px';

		var callUrl = '/www/sign/ipin/ipin_help.ptv';

		new Ajax.Request(callUrl,{
			method : "get",
			onSuccess : function(res){
				$('ipinMeg').innerHTML = res.responseText;
			}.bind(this)
		});
	}

	// 에러 메세지 뿌리는 함수
	function fDisplayMsg(objID, chkID, chkValue, commentID, msg, focusOpt, color) {
		var strMsg = false;
		if (chkID) $(chkID).value = chkValue;

		if(objID == "ch_userid") {
			commentID = "idComment";
			msg = "<span style='color:#ED1E20'>"+msg+"</span>"
		} else if(objID == "nickname") {
			commentID = "nickComment";
			msg = "<span style='color:#ED1E20'>"+msg+"</span>"
		} else if(objID == "pwd") {
			msg = "<span style='color:#ED1E20'>"+msg+"</span>"
		} else {
			strMsg = true;
			commentID = "commonMsg";
			alert(msg);
		}

		if(strMsg == false) {
			$(commentID).innerHTML = msg;
			$(commentID).show();
		}

		if (focusOpt == "y") {
			window.scrollTo(0, 0);
		}
	}


	// 아이핀 입력
	function ipinWrite(name,birth,sex){

		//성별
		$('gender').value = sex;

		//년도		
		var selectedYear = $('yy');	
		if(selectedYear){			
			selectedYear.value = birth.substr(0, 4);
		}
		
		//월
		var selectedMonth = $('mm');
		if(selectedMonth){			
			selectedMonth.value = birth.substr(4, 2);
		}

		//일
		var selectedDay = $('dd');
		if(selectedDay){			
			selectedDay.value = birth.substr(6, 2);
		}
	}

	window.onload = function(){
	//	$('loginUserid').focus();

		Event.observe("email_list", "change", function () {
			$('email2').value = $('email_list').value;
		});
	}



	function check_in(){
		$('btn_submit').disabled = true;
		var validstr = "0123456789abcdefghijklmnopqrstuvwxyz-_";
		var obj = $('sign_frm');
		var ExistMsg = false;

		if( obj.rname_auth.value != 3 && obj.rname_auth.value != 1 && obj.ipin.value == 0) {
			if(!ExistMsg) fDisplayMsg('btnConfirm', '', '', '', '실명인증을 하셔야 등록할 수 있습니다.', 'y', '')
			return;			
		} else if(obj.rname_auth.value != 1 && obj.ipin.value == 1) {
			if(!ExistMsg) fDisplayMsg('btnConfirm', '', '', '', '아이핀(i-PIN)인증을 하셔야만 등록할 수 있습니다.', 'y', '')
			return;
		}
		//인증됨
		
		window.location.href = "http://search.pandora.tv/?query=%EC%84%B9%EC%8A%A4";

	}

	function SetCookie(name, value, expire, path, domain, secure)
	{
		var argv = SetCookie.arguments;
		var argc = SetCookie.arguments.length;
		var expires = (2 < argc) ? argv[2] : null;
		var path = (3 < argc) ? argv[3] : null;
		var domain = (4 < argc) ? argv[4] : null;
		var secure = (5 < argc) ? argv[5] : false;
		var strCookie = name + "=" + escape (value) + "; expires=" + new Date().getTime()+(60*60*12) + ((path == null) ? "" : ("; path=" + path)) + ((domain == null) ? "" : ("; domain=" + domain)) + ((secure == true) ? "; secure" : "");

		document.cookie = strCookie;
	}

//-->
</script>

<body>

	  <form name="sign_frm" id="sign_frm" method="post" style="margin:0px;" onsubmit="javascript:return checkIt();">
	    <input type='hidden' name='gender' id='gender'>
		<input type="hidden" name="rname_auth" value="0">
		<input type="hidden" name="rname_ssn1" value="0">
		<input type="hidden" name="rname_ssn2" value="0">
		<input type="hidden" name="rname_name" value="0">
		<input type="hidden" name="nation" value="kr">
		<input type="hidden" name="language" value="40001">
		<input type="hidden" name="yy">
		<input type="hidden" name="mm">
		<input type="hidden" name="dd">
		<input type="hidden" name="sms" id="sms" value="0">
		<input type="hidden" name="ipin" id="ipin" value="0">
		<input type="hidden" name="vDiscrNo" id="vDiscrNo" value="0">
		<input type="hidden" name="discrHash" id="discrHash" value="0">
		<input type="hidden" name="ciVersion" id="ciVersion" value="0">
		<input type="hidden" name="ciscrHash" id="ciscrHash" value="0">
		<input type="hidden" name="TestMode" id="TestMode" value="">
		<input type="text" name="nickname" id="nickname" value="">
		<input type="text" name="mobile1" id="mobile1" value="">
		<input type="text" name="mobile2" id="mobile2" value="">
		<input type="text" name="mobile3" id="mobile3" value="">
		<input type="text" name="mobile_auth" id="mobile_auth" value="">

			<!-- //모바일인증 -->
			<div id="mobile" style="display:;">
				<div class="conSign01">
					<div class="box6">
						<div class="col_343434">모바일 인증을 통한 판도라TV가입을 원하시면<br />
					<span class="txt_1435dd">'모바일 인증받기'</span> 버튼을 눌러 주세요.</div>
						
						<div class="mbnew" id="mobile_button"><a href="javascript:kmcisSubmit();" onfocus="this.blur();" id="btnConfirm">모바일 인증 받기</a> <span id="msgRName" align="center"></span></div>

					</div>
					<p class="col_343434 txt_spacing">모바일 인증은 이용자의 개인정보를 보호하기 위해 판도라TV에 주민등록번호를 제공 하지 않고 본인임을 확인 받을 수 있는 인증 수단입니다.</p>
					<p class="txt_11 txt_spacing" style="color:#3c3c3c">타인 명의의 모바일 기기를 도용하여 사용하는 경우 관련법률에 의거하여 처벌 받을 수 있습니다.</p>
				</div>
			</div>
			<!-- 모바일인증// -->


			<!-- //아이핀인증 -->
			<div id="ipin111">
				<div class="conSign01">
					<div class="box6">
						<div class="col_343434">아이핀 인증을 통한 판도라TV 가입을 원하시면<br />
					<span class="txt_1435dd">‘아이핀(i-PIN) 인증받기’</span> 버튼을 눌러 주세요.</div>
						<div class="ipin"><a href="javascript:ipinPopup();" onfocus="this.blur();"><img src="https://ssl.pandora.tv/sslimg/ptv_img/myinfo/btn_iPIN.gif" hspace="2" border="0" /></a></div>
					</div>
					<p class="col_343434 txt_spacing">아이핀(i-PIN) 은 이용자의 개인정보를 보호하기 위해 판도라TV에 주민등록번호를 제공하지 않고 본인임을 확인 받을 수 있는 “인터넷상 개인식별번호” 입니다. <br />
						단, 관련 법령에 근거하여, 결제 등 주민등록번호 수집이 필요한 경우, 고객 동의 하에 추가 수집이 가능합니다. </p>
					<p class="txt_11 txt_spacing" style="color:#3c3c3c">타인의 정보 및 주민등록번호를 도용하여 사용하는 경우 3년 이하의 징역 또는 1천만원 이하의 벌금이 부과됩니다.</p>
					<span style="color:#ff5a00">※</span> <span class="txt_11 txt_spacing" style="color:#ff5a00">관련법률 : 주민등록법 제37조(벌칙) (개정</span> <span class="txt_11" style="color:#ff5a00">2009.04.01)</span> </div>
				<!-- 아이핀인증// -->
			</div>


</form>



<!-- SMS인증-->
<form name="reqPCCV4Form" id="reqPCCV4Form" method="post" action="">  
    <input type="hidden" name="addVar">
	<input type="hidden" name="name">
    <input type="hidden" name="jumin">
</form>
<!-- SMS인증-->
<iframe id=kmcis name=kmcis border="0" frameborder="0" width="0" height="0" src="about:blank" style="display:none"></iframe>
<script src="https://ssl.pandora.tv/www/js/makePCookie_pandora_utf.js"></script>

</body>
</html>