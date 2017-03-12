<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="text/javascript" src="http://imgcdn.pandora.tv/jellypod/js/jwplayer.js"></script>
		<script type="text/javascript">jwplayer.key="pqZdtgbwq9S9a/XwohrUOclfnZQHrtmOcJO2xg==";</script>
		<script type="text/javascript" src="http://imgcdn.pandora.tv/jellypod/js/jquery-1.9.1.min.js"></script>		
		<link rel="stylesheet" href="http://imgcdn.pandora.tv/jellypod/css/main.css" type="text/css"/>
		<script type="text/javascript" name="makePCookie" id="makePCookie" src="http://imgcdn.pandora.tv/_ptv_all/util/makePCookie_jellypod_utf.js"></script>

	</head>
	<body>
<iframe id="logfr" name="logfr" border="0" frameborder="0" width="0" height="0" src="about:blank" style="display:none"></iframe>
	<div class="player">
		<div>
			<div id="myElement"  >
			<a href="javascript:playerSet.startPlay();"><img src="http://imgcdn.pandora.tv/jellypod/images/main/player.gif" alt="player"></a></div>
		</div>
	</div>

<script type="text/javascript">

var playerSet = {
	_set : "1",
	_userid : '<?=$_COOKIE["userid"]?>',
	_channelid : '',
	_prgid : '',
	_categ : '',
	_playtype : '',
	_playUser : '',
	_refer : '',
	_title_str : '',
	_file_url1 : '',
	_file_url2 : '',
	_file_url3 : '',
	_file_url4 : '',
	_img_url : '',
	_GUID : '<?=$_COOKIE["PCID"]?>',
	_like : '', 
	_vol :'',

	startPlay : function (userid , channelid,prgid,categ,playtype ,playUser ,refer ,title_str, file_url1 ,file_url2 ,file_url3 ,file_url4 ,img_url,like){
		this._userid=userid;
		this._channelid =channelid;
		this._prgid =prgid;
		this._categ= categ;
		if (playtype!="Video"){
//			this._playtype = playtype;
			this._playtype = "Audio";
		}else{this._playtype = "Video";}
 
		this._playUser=playUser;
		this._refer =refer;
		this._title_str =title_str;
		this._file_url1 =file_url1;
		this._file_url2 =file_url2;
		this._file_url3 =file_url3;
		this._file_url4 =file_url4;
		this._img_url =img_url;
		this._like = like; 


		if (this._set=="1"){ //플레이어 미로드시
			this._set="2";
			this.setup(userid , channelid,prgid,categ,playtype ,playUser ,refer ,title_str, file_url1 ,file_url2 ,file_url3 ,file_url4 ,img_url,like);
		}else{ //플레이어 로드시
			this.load(userid , channelid,prgid,categ,playtype ,playUser ,refer ,title_str, file_url1 ,file_url2 ,file_url3 ,file_url4 ,img_url,like);
		}
	},
	


	setup : function (userid , channelid,prgid,categ,playtype ,playUser ,refer ,title_str, file_url1 ,file_url2 ,file_url3 ,file_url4 ,img_url,like){
			console.log('setup');
//			alert('우리주소');
		if (playtype =="Video111")	{ // video
			jwplayer("myElement").setup({
				width: '960',
				height: '320',
				image: img_url,
//				file: file_url,
				sources: [
				{  file: 'http://org2.jellypod.com/hd/jellypod/1/73/2013072604141528530bmees0p7st4.mp4'  , label:"240p"}
//				{  file: 'http://movies.apple.com/media/kr/iphone/2012/212b67-cd9a-e384-85a58600a9/tours/feature/iphone5-feature-keynote-kr-20120912_848x480.mp4'  , label:"240p"}
//http://movies.apple.com/media/kr/iphone/2012/212b67-cd9a-e384-85a58600a9/tours/feature/iphone5-feature-keynote-kr-20120912_848x480.mp4" 

//				{  file: file_url1  ,label:"240p"},
//				{  file: file_url2  ,label:"336p"},
//				{  file: file_url3  ,label:"480p"},
//				{  file: file_url4  ,label:"720p"}

				],

				title: title_str
			  });

//				$(".jwpreview").css("display","block");
				$(".jwfullscreen").css("display","block");
				$('.jwcapLeft').each(function(index){ if (index==0){ $(this).prepend('<button onclick="playerSet.home()"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.like()"></button>'); }});
				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="like" onclick="playerSet.like()"><button></button></span>'); }});

				if (playerSet._like=="Y"){
					$('.like').addClass('on');
				}



				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="share" onclick="playerSet.share()"><button></button></span>'); }});



		}else{
			jwplayer("myElement").setup({
				width: '960',
				height: '60',
				image: img_url,
				file: 'http://file.ssenhosting.com/data1/guitarkirk/726jokan.mp3',
				title: title_str
			  });

//				$(".jwpreview").css("display","none");		//섬네일이미지
				$(".jwfullscreen").css("display","none"); // 풀스크린
				$("#myElement_controlbar .jwgroup.jwcenter").css("width","640px");
				$(".jwcontrolbar .jwtime").css("max-width","570px");

				$('.jwcapLeft').each(function(index){ if (index==0){ $(this).prepend('<button onclick="playerSet.home()"></button>'); }});

				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.like()"></button>'); }});

				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="like" onclick="playerSet.like()"><button></button></span>'); }});
				if (playerSet._like=="Y"){
					$('.like').addClass('on');
				}


				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="share" onclick="playerSet.share()"><button></button></span>'); }});
				playerSet._vol=jwplayer().getVolume();
		}
		

		$(".jwpreview").css("display","none");


		jwplayer().onReady( function(){ //  재생준비 ready	셋업시에만 시작
			try{document.getElementById("myElement_logo").style.display="none";}catch (e){} 
		if (playerSet._playtype =="Video")	{ // video
			console.log('비디오 레디');

//				$(".jwpreview").css("display","block");
				$(".jwfullscreen").css("display","none");

				$('.jwcapLeft').each(function(index){ if (index==0){ $(this).prepend('<button onclick="playerSet.home()"></button>'); }});
				
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'20\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'40\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'60\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'80\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'100\')"></button>'); }});

				if (jwplayer().getVolume()==0){
					jwplayer().setVolume('20');
					playerSet._vol ='20';
				}

				playerSet.chVol(jwplayer().getVolume());
				$('#myElement_controlbar_volumeoverlay').css("display","none");// 볼륨컨트롤 안보이게

				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="like" onclick="playerSet.like()"><button></button></span>'); }});

				if (playerSet._like=="Y"){
					$('.like').addClass('on');
				}

				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="share" onclick="playerSet.share()"><button></button></span>'); }});
				top.mainpage.rows="*,320";

					console.log('비디오 레디2');

		}else{
			console.log('오디오 레디');
//				$(".jwpreview").css("display","none");		//섬네일이미지
				$(".jwfullscreen").css("display","none"); // 풀스크린
				$("#myElement_controlbar .jwgroup.jwcenter").css("width","504px");//46
				$(".jwcontrolbar .jwtime").css("max-width","534px");//-46

				$('.jwcapLeft').each(function(index){ if (index==0){ $(this).prepend('<button onclick="playerSet.home()"></button>'); }});

				
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'20\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'40\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'60\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'80\')"></button>'); }});
				$('.jwmute').each(function(index){ if (index==0){ $(this).append('<button class="bar" onclick="playerSet.chVol(\'100\')"></button>'); }});


				if (jwplayer().getVolume()==0){
					jwplayer().setVolume('20');
					playerSet._vol ='20';
				}

				playerSet.chVol(jwplayer().getVolume());
				$('#myElement_controlbar_volumeoverlay').css("display","none");// 볼륨컨트롤 안보이게

				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="like" onclick="playerSet.like()"><button></button></span>'); }});




				$('.jwgroup').each(function(index){ if (index==2){ $(this).append('<span class="share" onclick="playerSet.share()"><button></button></span>'); }});

				if (playerSet._like=="Y"){
					$('.like').addClass('on');
				}
				$("#myElement_controlbar.jwcontrolbar").addClass("audio");
		}
		
		
		} );

		jwplayer().onComplete(function(){ // 재생완료
			console.log('재생완료');
			playerSet.call_log('pd');
		});

		jwplayer().onError(function(){ // 내부에러
			console.log('내부오류');
			playerSet.call_log('pe');
		});
		jwplayer().onSetupError(function(){ // 셋업에러
			console.log('로드오류');
			playerSet.call_log('le');
		});
		
		playerSet.call_log('ld');

			

		console.log('재생시작');
		jwplayer().play();
	},
	
	load : function (userid , channelid,prgid,categ,playtype ,playUser ,refer ,title_str, file_url1 ,file_url2 ,file_url3 ,file_url4 ,img_url,like){
			console.log('load');
			if (this._playtype=="Video111"){

//file_url	=>


				jwplayer().load([{
				image: img_url,
				sources: [
				{  file: file_url1  ,label:"240p"},
				{  file: file_url2  ,label:"336p"},
				{  file: file_url3  ,label:"480p"},
				{  file: file_url4  ,label:"720p"}
				],
				title: title_str

				}]);

				
//				$(".jwpreview").css("display","block");
				$("#myElement_controlbar.jwcontrolbar").removeClass("audio");
				$(".jwfullscreen").css("display","none");
				playerSet.call_log('ld');
				console.log('재생시작');
				jwplayer().resize(960,320);
				top.mainpage.rows="*,320";
				jwplayer().play();

			}else{
				jwplayer().load([{
				  file: 'http://org2.jellypod.com/audiouhd/jellypod/1/87/20130726161548059wq0zpcngvqjqr.mp3',
				  image: img_url
				}]);
//				$("#myElement_controlbar.jwcontrolbar").css({"display" :"block","opacity":"1"});
				$("#myElement_controlbar.jwcontrolbar").addClass("audio");
					
//				attr("style","display:block;opacity:1;");

//				#myElement_controlbar.jwcontrolbar
//display:block !important;opacity:1 !important;
//				$(".jwpreview").css("display","none");		//섬네일이미지
				$(".jwfullscreen").css("display","none"); // 풀스크린
				playerSet.call_log('ld');
				console.log('재생시작');
				jwplayer().resize(960,60);
				top.mainpage.rows="*,60";
				jwplayer().play();

			}

	},
	chVol :function (vol){ //볼륨조절

	//	$(this).unbind("click",function(){});

		for (var k =0 ;k<5 ;k++ ){
			$('.bar').each(function(index){ if (index==k){ $(this).removeClass('on'); }});
		}

		var valchange = parseInt(vol/20);
//		console.log("valchange=" +valchange);

		if (valchange==0){
//			playerSet._vol=jwplayer().getVolume();
	
			$('.jwmute>button').each(function(index){ if (index==0) { 
					$(this).removeClass('on');
					$(this).one("click",function(){
//						console.log("remove = " + playerSet._vol + ", get = " + jwplayer().getVolume());
						playerSet.chVol(playerSet._vol);						
						jwplayer().setVolume(playerSet._vol);
					});
			}});

		}else{

			$('.jwmute>button').each(function(index){ if (index==0) { 
					$(this).addClass('on');
//					playerSet.chVol('0');
					$(this).one("click",function(){
//						playerSet._vol=jwplayer().getVolume() ? jwplayer().getVolume() : 0;
//						console.log("on = " + playerSet._vol + ", get = " + jwplayer().getVolume());
						playerSet.chVol('0');
						jwplayer().setVolume('0');

					});
			}});

		}

		for (var i =0 ;i<valchange ;i++ ){
			$('.bar').each(function(index){ if (index==i){ $(this).addClass('on'); jwplayer().setVolume((i*20+20)); }});
		}


	
	},


	call_log : function (mode){// 로그
		var log_url = "http://log.sv.pandora.tv/jellypod_stream?device=jw_w";
			log_url +=	"&mode="	+	mode;
			log_url +=	"&userid="	+	this._userid;
			log_url +=	"&channelid="	+	this._channelid;
			log_url +=	"&prgid="	+	this._prgid;
			log_url +=	"&categ="	+	this._categ;
			log_url +=	"&playType="	+	this._playtype;
			log_url +=	"&playUser="	+	this._playUser;
			log_url +=	"&GUID="	+	this._GUID ;//this._GUID;
			log_url +=	"&refer="	+	this._refer;
		try{document.getElementById("logfr").src=log_url;}catch (e){}
	},
	like : function (){ // 좋아요


		$.ajax({
			type : 'post',
			url :  "/?c=channel&m=episode_good", 
			data : {"chidx" : this._channelid, "epi_idx" : this._prgid},
			success : function(res){
//				alert(res);
				if( res =="OK"){
					alert("좋아요되었습니다.");
					playerSet.call_log('good');
					$('.like').addClass('on');
				}else if(res=="DUP"){
					alert("이미좋아요하셨습니다.");
					$('.like').addClass('on');
				}else{
					alert('좋아요가 되지 않았습니다.');
				}
			},
			error : function () {
			}
		});
	},
	home : function (){//채널홈가기
		str ="http://www.jellypod.com/?c=channel&chnidx="+this._channelid;
		top.contentfr.location.href=str;
	},
	share : function (){//공유
		top.contentfr.LayerAction.Show_layer(this._channelid,this._prgid);
	}


};



function jplayinfo(chidx,epi_idx){
	$.ajax({
		type : 'post',
		url :  "/?c=index&m=get_play_info", 
		data : {"chn_idx" : chidx, "epi_idx" : epi_idx},
		success : function(res){
			if( res ){
//playerSet.startPlay('userid','channelid','prgid','categ','playtype' ,'playUser' ,'refer' ,'title_str', 'file_url' ,'img_url','like');
			var rsi = $.parseJSON(res);



				if (rsi.result=="OK"){

			console.log(rsi.list[0]['userid']);
			console.log(rsi.list[0]['channelid']);
			console.log(rsi.list[0]['prgid']);
			console.log(rsi.list[0]['categ']);
			console.log(rsi.list[0]['playtype']);
			console.log(rsi.list[0]['playUser']);
			console.log(rsi.list[0]['refer']);
			console.log(rsi.list[0]['title_str']);
			console.log(rsi.list[0]['fileurl1']);
			console.log(rsi.list[0]['fileurl2']);
			console.log(rsi.list[0]['fileurl3']);
			console.log(rsi.list[0]['fileurl4']);



					playerSet.startPlay(rsi.list[0]['userid'] , rsi.list[0]['channelid'] , rsi.list[0]['prgid'] , rsi.list[0]['categ'] , rsi.list[0]['playtype'] , rsi.list[0]['playUser'] , rsi.list[0]['refer'] , rsi.list[0]['title_str'] , rsi.list[0]['fileurl1'] ,rsi.list[0]['fileurl2'] ,rsi.list[0]['fileurl3'] ,rsi.list[0]['fileurl4'] , rsi.list[0]['imgurl'] , rsi.list[0]['like']);
				}else{
		//			alert("잘못된 정보입니다.");
		playerSet.startPlay(rsi.list[0]['userid'] , rsi.list[0]['channelid'] , rsi.list[0]['prgid'] , rsi.list[0]['categ'] , 'Video' , rsi.list[0]['playUser'] , rsi.list[0]['refer'] , rsi.list[0]['title_str'] , rsi.list[0]['fileurl1'] ,rsi.list[0]['fileurl2'] ,rsi.list[0]['fileurl3'] ,rsi.list[0]['fileurl4'] , rsi.list[0]['imgurl'] , rsi.list[0]['like']);
				}





			}else{
		//		alert("잘못된 정보입니다.");
		
				playerSet.startPlay(rsi.list[0]['userid'] , rsi.list[0]['channelid'] , rsi.list[0]['prgid'] , rsi.list[0]['categ'] , 'Video' , rsi.list[0]['playUser'] , rsi.list[0]['refer'] , rsi.list[0]['title_str'] , rsi.list[0]['fileurl1'] ,rsi.list[0]['fileurl2'] ,rsi.list[0]['fileurl3'] ,rsi.list[0]['fileurl4'] , rsi.list[0]['imgurl'] , rsi.list[0]['like']);

			
			}
		},
		error : function () {
		}
	});
}



</script>



	</body>
</html>