<!doctype html> 
<html> 
<head> 
<meta charset="utf-8"> 
<title></title> 
<style>
</style> 
</head> 
<body>

<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<p><a href="https://twitter.com/intent/tweet?in_reply_to=51113028241989632">Reply</a></p>
<p><a href="https://twitter.com/intent/retweet?tweet_id=51113028241989632">Retweet</a></p>
<p><a href="https://twitter.com/intent/favorite?tweet_id=51113028241989632">Favorite</a></p>


<button type="button" id="btnLogin">트위터에 로그인</button> 
<button type="button" id="btnUser">사용자 이름 불러오기</button> 
<button type="button" id="btnIsConnect">접속상태보기</button> 
<button type="button" id="btnRequireConnect">연결 여부 확인</button> 
<button type="button" id="btnHovercards">호버카드 생성</button> 
<button type="button" id="btnTweetbox">트윗박스</button> 
<button type="button" id="btnConnectButton">트위터 연결 버튼 생성</button> 
<button type="button" id="btnFollowButton">팔로우 버튼 생성</button> 
<button type="button" id="btnBind">Bind Event</button> 
<button type="button" id="btnUpdate">글쓰기</button> 
<button type="button" id="btnTest">test</button> 
<button type="button" id="btnLogout">트위터에 로그아웃</button>
<div id="msg"></div>
<pre> 
https://dev.twitter.com/apps 에서 키 등록후  
http://platform.twitter.com/anywhere.js?id=[ Consumer key ]&v=1 
Consumer key를 이용하여 js파일을 호출하세요. 
</pre>
<script src="http://platform.twitter.com/anywhere.js?id=g5uxDeyoOJf0gnLqsFjTzw&v=1.1"></script> 
<script type="text/javascript">
window.addEventListener("load", init, false);
function init(){ 
 var  msg = document.querySelector("#msg") 
  
 twttr.anywhere(function(T){
  if(T.isConnected()){ 
   screenName = T.currentUser.data('screen_name'); 
   profile = T.currentUser.data('profile_image_url') 
  } 
   
  //트위터에 로그인 
  document.querySelector("#btnLogin").onclick = function(){ 
   T.signIn(); 
  } 
   
  //사용자 이름 불러오기 
  document.querySelector("#btnUser").onclick = function(){ 
   msg.innerHTML = "ID: " + screenName + " - profile :<img src='" + profile + "'>"; 
  } 
   
  //접속상태보기 
  document.querySelector("#btnIsConnect").onclick = function(){ 
   msg.innerHTML = T.isConnected(); 
  } 
   
  //연결 여부 확인 
  document.querySelector("#btnRequireConnect").onclick = function(){ 
  alert( T.requireConnect()); 
  } 
   
  //호버카드 생성 
  document.querySelector("#btnHovercards").onclick = function(){ 
   msg.innerHTML = T.hovercards(); 
  } 
   
  //트윗박스 
  document.querySelector("#btnTweetbox").onclick = function(){ 
   T("#msg").tweetBox(); 
  } 
   
  //트위터 연결 버튼 생성 
  document.querySelector("#btnConnectButton").onclick = function(){ 
   T("#msg").connectButton(); 
  } 
   
  //팔로우 버튼 생성 
  document.querySelector("#btnFollowButton").onclick = function(){ 
   T("#msg").followButton("twitterapi"); 
  } 
   
  //btnBind 
  document.querySelector("#btnBind").onclick = function(){ 
   T.bind("signOut", function (e) { 
    msg.innerHTML = "로그아웃 되었습니다."; 
   }); 
  } 
   
  //글쓰기 
  document.querySelector("#btnUpdate").onclick = function(){ 
   T.Status.update("Hello world", { 
    success: function(){ 
     msg.innerHTML = "글쓰기 성공"; 
    }, 
    error: function(e){ 
     msg.innerHTML = JSON.stringify(e)+ ": 글쓰기 실패"; 
    } 
   });  
  } 
   
  //test 
  document.querySelector("#btnTest").onclick = function(){ 
   //T.Status.notifications(); 
   console.log(T.currentUser.data('screen_name')) 
  } 
 }); 
  
 //트위터에 로그아웃 
 document.querySelector("#btnLogout").onclick = function(){ 
  twttr.anywhere.signOut(); 
 } 
}
</script> 
</body> 
</html>