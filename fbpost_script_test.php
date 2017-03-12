<script src="http://connect.facebook.net/en_US/all.js" language="JavaScript" type="text/javascript"></script>
<script>
//페이스북 초기화
window.fbAsyncInit = function() {
FB.init({appId: '355911207854367', status: true, cookie: true,xfbml: true});  //앱ID 에 어플리케이션 id 넣을 것!~
};
(function() {
	e = document.createElement('script');
	e.type = 'text/javascript';
	e.src = document.location.protocol +
	'//connect.facebook.net/ko_KR/all.js';
	e.async = true;
}());
 
//자동 포스팅 시키기
function doPost() {

	FB.api('/me/feed',
	'post',
	{
		method: 'feed',  //feed 로 올림
		name: '테스트',  // 링크가 걸리는 이름
		link: '클릭하면 넘어갈 주소',  // 링크 주소
		picture: '사진 주소',  // 사진
		caption: 'caption',  //
		description: 'description',  // 컨텐츠
		message: 'message' // 텍스트박스 안의 글자
	},
	function(response) {

		if(!response || response.error){

		FB.login(function(response) {  // 자동 글 등록 실패시 권한 부여하는 창을 띄움

		Log.info('FB.login callback', response);
			if (response.status === 'connected') {
					Log.info('User is logged in');
			} else {
					Log.info('User is logged out');
			}
		},
			{scope: 'read_stream,publish_stream'}
		);
			alert("facebook 권한 허가를 누르신 후 \n다시 눌러주십시오.");
		}else{
			alert("글 등록 성공");  //자동 글 등록 성공시
		}
	});

};

FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				userData();
			}else{  //로그인이 안되 있을 경우 로그인 창과 퍼미션 창을 띄움
				FB.login(function(response) {
					Log.info('FB.login callback', response);
					if (response.status === 'connected') {Log.info('User is logged in');}
					else {Log.info('User is logged out');}
				},
				{scope: 'read_stream,publish_stream'}  // 권한 설정을 주는 부분~!
				);
			}
			//publicData();
		}
	);
</script>